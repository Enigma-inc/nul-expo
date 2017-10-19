@extends('layouts.app')

@section('content')
  {{--  <div class="page-title">
    <h3 >{{$conference}} Abstracts</h3>
    <a class="btn btn-primary btn-sm" href="{{route('export-abstracts',['conference'=>$conference])}}">Download Authors Spreadsheet</a>
  </div>  --}}
   <div>
     @foreach ($expoApplications as $index =>$expoApplication)
         <div class=" admin-abstract-list col-xs-12">
           <div class="image">
             <img width="60px" src="{{$expoApplication->country_flag}}" alt="flag">
                <h2>{{$index +1}}</h2>
           </div>
           <div class="panel panel-default col-xs-12">

              <div class="details panel-body">
                <div class="table-header">
                   <div class="head-item">
                     {{$expoApplication->name.' '.$expoApplication->surname}}
                   </div>
                   <div class="head-item">
                     {{$expoApplication->country}}
                   </div>
                   <div class="head-item ">
                     <div class="contacts">
                       <small>
                         {{$expoApplication->country_phone_code.' '.$expoApplication->phone}}
                       </small>
                       <small>
                          <a href="mailto:{{$expoApplication->email}}">{{$expoApplication->email}}</a>
                       </small>
                     </div>

                   </div>
                </div>

                <div class="abstracts">
                    <div class="body">
                    <div class="title">
                        {{$expoApplication->title}}
                    </div>
                    </div>
                    <div class="footer">
                        <p class="footer-text-expo">{{$expoApplication->summary}}</p>
                    </div>
                </div>
                 {{--  @if ($conference=="NULISTICE" || $conference=="RERIS")
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
                 @else  --}}
                   {{--  @foreach ($submission->abstracts as $index => $abstract)
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
                         </div>
                         <div class="footer">
                             <p class="footer-text">{{$abstract->comment}}</p>
                         </div>
                       </div>

                   @endforeach  --}}

                 {{--  @endif  --}}
              </div>
            </div>



         </div>

     @endforeach
      <div class="pagination-links">
         {{ $expoApplications->links() }}
      </div>
   </div>
@endsection
