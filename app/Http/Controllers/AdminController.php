<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Submission;
use App\AbstractDoc;
use Maatwebsite\Excel\Facades\Excel;
use App\Transformers\SubmissionExportTransformer;
use DB;

class AdminController extends Controller
{
  public function index($value='')
  {
      $rerisAbstracts=AbstractDoc::where('conference','=','RERIS')->get();
      $nulisticeAbstracts=AbstractDoc::where('conference','=','NULISTICE')->get();
      $rerisCount =$rerisAbstracts->count();
      $nulisticeCount =$nulisticeAbstracts->count();

      //Aggregate Authors
      $rerisAuthors=DB::table('submissions')
           ->join('abstract_docs', 'submissions.id', '=', 'abstract_docs.submission_id')
           ->select('submissions.id')->where('abstract_docs.conference','=','RERIS')
           ->groupBy('submissions.id')
           ->get()->count();
      $nulisticeAuthors=DB::table('submissions')
           ->join('abstract_docs', 'submissions.id', '=', 'abstract_docs.submission_id')
           ->select('submissions.id')->where('abstract_docs.conference','=','NULISTICE')
           ->groupBy('submissions.id')
           ->get()->count();
      $allAuthors=DB::table('submissions')
           ->join('abstract_docs', 'submissions.id', '=', 'abstract_docs.submission_id')
           ->select('submissions.id')
           ->groupBy('submissions.id')
           ->get()->count();

      return view('admin.home')->with(['rerisCount'=>$rerisCount,'nulisticeCount'=>$nulisticeCount,
                                       'rerisAuthors'=>$rerisAuthors,'nulisticeAuthors'=>$nulisticeAuthors,
                                        'allAuthors'=>$allAuthors]);
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
        $submissions=Submission::with(['abstracts','owner'])
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
  //   return $submissions->last();
      return view('admin.abstracts')->with(['submissions'=>$submissions,'conference'=>ucfirst($conference)]);
    }

    public function exportToExcel(Request $request,$conference)
    {

        $filteredSubmissions=[];
        $submissions=null;

        if($conference =='RERIS' || $conference =='NULISTICE'){
          $filteredSubmissions = array_unique(AbstractDoc::whereConference($conference)
                                ->get()
                                ->pluck('submission_id')
                                ->toArray());
          $submissions=Submission::orderBy('updated_at','DESC')
                                ->whereIn('id',$filteredSubmissions)
                                ->has('abstracts', '>' , 0)
                                ->get();
        }
        else{
          $submissions=Submission::orderBy('updated_at','DESC')
                                  ->has('abstracts', '>' , 0)
                                  ->get();
        }
        
      //  return $submissions;
         $submissionList= SubmissionExportTransformer::transform($submissions);

        Excel::create($conference.'-Abstract-Authors', function($excel) use ($submissionList) {
                //Add headers
                array_unshift($submissionList,['Title','Name','Surname','Email','Phone','Organisation','Country']);
                    // Build the spreadsheet, passing in the payments array
                $excel->sheet('sheet1', function($sheet) use ($submissionList) {
                    $sheet->fromArray($submissionList, null, 'A1', false, false);

                        // Set black background
                        $sheet->row(1, function($row) {

                            // call cell manipulation methods
                            $row->setBackground('#000000');
                            $row->setFontColor('#ffffff');
                            $row->setFontSize(12);

                        });
                });

        })->export('xlsx');

    }


}
