<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Submission;
use App\AbstractDoc;

class AdminController extends Controller
{
  public function index($value='')
  {
      $rerisCount =AbstractDoc::where('conference','=','RERIS')
                                ->get()
                                ->count();
      $nulisticeCount =AbstractDoc::where('conference','=','NULISTICE')
                                ->get()
                                ->count();
      return view('admin.home')->with(['rerisCount'=>$rerisCount,'nulisticeCount'=>$nulisticeCount]);
  }
    public function abstracts(Request $request)
    {
      $conference=strtoupper($request->input('conference'));
      $filteredSubmissions=[];
      $submissions=null;

      if($conference =='RERIS' || $conference =='NULISTICE'){
        $filteredSubmissions = array_unique(AbstractDoc::whereConference($conference)
                              ->get()
                              ->pluck('submission_id')
                              ->toArray());
        $submissions=Submission::with(['abstracts'])
                              ->orderBy('updated_at','DESC')
                              ->whereIn('id',$filteredSubmissions)
                              ->has('abstracts', '>' , 0)
                              ->paginate(10);
      }
      else{
        $submissions=Submission::with(['abstracts'])
                                ->orderBy('updated_at','DESC')
                                ->has('abstracts', '>' , 0)
                                ->paginate(10);
      }
    //  return $submissions;
      return view('admin.abstracts')->with(['submissions'=>$submissions,'conference'=>ucfirst($conference)]);
    }


}
