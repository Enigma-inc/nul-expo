@extends('layouts.app')

@section('content')
  <div class="page-title">
    <h3>{{$conference}} Abstracts</h3> <hr>
  </div>
   <div>
     @foreach ($submissions as $subIndex=>$submission)
       <div class="panel panel-default ">
         <div class="panel-body admin-abstract-list">
           <div class="image">
             <img width="60px" src="{{$submission->country_flag}}" alt="flag">
              <h2>{{$subIndex+1}}</h2>
           </div>
              <div class="details">
                <div class="table-header">
                   <div class="head-item">
                     {{$submission->title." ".$submission->name." ".$submission->surname}}
                   </div>
                   <div class="head-item">
                     {{$submission->organisation}}
                   </div>
                   <div class="head-item">
                     {{$submission->country}}
                   </div>
                   <div class="head-item">
                      {{$submission->phone_code.' '.$submission->phone}}
                   </div>
                </div>
                 @if ($conference=="NULISTICE" || $conference=="RERIS")
                   @php($abstractIndex=1)
                   @foreach ($submission->abstracts->whereIn('conference',$conference) as $index =>$abstract)
                     <div class="abstracts">
                       <div class="body">
                         <div class="abstract-count">
                            <h4>{{($subIndex+1).'.'.$abstractIndex}}</h4>
                         </div>
                         <div class="conference badge">
                           {{$abstract->conference}}
                         </div>
                          <div class="title">
                              {{$abstract->title}}
                          </div>
                          <div class="button">
                            <form action="{{route('abstract.download')}}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="file-name" value="{{$abstract->doc_path}}">
                                <button type="submit" class="btn btn-success btn-xs margin-right-2"> <i class="fa fa-download"></i> Download</button>
                            </form>
                          </div>
                       </div>
                       <div class="footer">
                           <p class="footer-text">{{$abstract->comment}}</p>
                       </div>
                     </div>
                     @php($abstractIndex++)
                   @endforeach
                 @else
                   @foreach ($submission->abstracts as $index => $abstract)
                       <div class="abstracts">
                         <div class="body">
                           <div class="abstract-count">
                              <h4>{{($subIndex+1).'.'.($index+1)}}</h4>
                           </div>
                           <div class="conference badge">
                             {{$abstract->conference}}
                           </div>
                            <div class="title">
                                {{$abstract->title}}
                            </div>
                            <div class="button">
                              <form action="{{route('abstract.download')}}" method="POST">
                                  {{ csrf_field() }}
                                  <input type="hidden" name="file-name" value="{{$abstract->doc_path}}">
                                  <button type="submit" class="btn btn-success btn-xs margin-right-2"> <i class="fa fa-download"></i> Download</button>
                              </form>
                            </div>
                         </div>
                         <div class="footer">
                             <p class="footer-text">{{$abstract->comment}}</p>
                         </div>
                       </div>

                   @endforeach

                 @endif
              </div>




         </div>
       </div>
     @endforeach
      <div class="pagination-links">
         {{ $submissions->appends($_GET)->links() }}
      </div>
   </div>
@endsection
