<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Submission;
use App\AbstractDoc;
use Maatwebsite\Excel\Facades\Excel;
use App\Transformers\SubmissionExportTransformer;
use ConsoleTVs\Charts\Facades\Charts;
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
      $submissions=$this->getConferenceSubmissions($conference);
  //   return $submissions->last();
      return view('admin.abstracts')->with(['submissions'=>$submissions,'conference'=>ucfirst($conference)]);
    }

    public function exportToExcel(Request $request,$conference)
    {

        $submissions=$this->getConferenceSubmissions($conference);

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
    public function statistics($conference)
    {
       $countriesJsonStr = file_get_contents(public_path() .'/data/countries.json');
       $countriesCollection = collect(json_decode($countriesJsonStr, true));
        $submissions=$this->getConferenceSubmissions($conference,false);
        //Map and Aggregate Abstrats to Countries
        $abstractStats=[];
        foreach ($submissions->groupBy('country') as $Country => $submissions) {
          foreach ($submissions as  $submission) {
            array_push($abstractStats,
                     [
                      'abstracts'=>$conference!='all'?$submission->abstracts()->where('conference',$conference)
                                      ->count():$submission->abstracts()->count(),
                      'country_code'=>$countriesCollection->where('name',$Country)->pluck('alpha2Code')->first(),
                      'country_name'=>$Country
                   ]);
          }

        }

        //return collect($abstractStats)->pluck('country_code','country_name');
        $chart = Charts::create('geo', 'google')
                    ->title('Abstracts By Country ('.strtoupper($conference).')')
                    ->labels(collect($abstractStats)->pluck('country_code'))
                    ->values(collect($abstractStats)->pluck('abstracts'))
                    ->elementLabel('Abstracts')
                    ->colors(['#c2d4c7','#00a92e'])
                    ->dimensions(0,400);
        return view('admin.statistics', ['chart' => $chart,'conference'=>$conference]);

    }

    protected function getConferenceSubmissions($_conference,$paged=true)
    {
      $conference=strtoupper($_conference);
      $filteredSubmissions=[];
      $submissions=null;

      if($conference =='RERIS' || $conference =='NULISTICE'){
        $filteredSubmissions = array_unique(AbstractDoc::whereConference($conference)
                              ->get()
                              ->pluck('submission_id')
                              ->toArray());
          if ($paged) {
            $submissions=Submission::orderBy('updated_at','DESC')
                                  ->with('abstracts')
                                  ->withCount('abstracts')
                                  ->whereIn('id',$filteredSubmissions)
                                  ->has('abstracts', '>' , 0)
                                  ->paginate(10);
          } else {
            $submissions=Submission::orderBy('updated_at','DESC')
                                  ->with('abstracts')
                                  ->withCount('abstracts')
                                  ->whereIn('id',$filteredSubmissions)
                                  ->has('abstracts', '>' , 0)
                                  ->get();
          }

      }
      else{
          if ($paged) {
            $submissions=Submission::orderBy('updated_at','DESC')
                                    ->with('abstracts')
                                    ->withCount('abstracts')
                                    ->has('abstracts', '>' , 0)
                                    ->paginate(10);
          } else {
            $submissions=Submission::orderBy('updated_at','DESC')
                                    ->with('abstracts')
                                    ->withCount('abstracts')
                                    ->has('abstracts', '>' , 0)
                                    ->get();
          }

      }

  return $submissions;



    }


}
