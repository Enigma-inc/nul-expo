 @extends('layouts.app')

 @section('content')
    <div>
      @foreach ($submissions as $submission)
        <div class="panel panel-default ">
          <div class="panel-body admin-abstract-list">
            <img width="60px" src="{{$submission->country_flag}}" alt="flag">
            {{-- <img width="60px" src="../images/seo/og.jpg" alt="flag"> --}}
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
                 @foreach ($submission->abstracts as $abstract)
                   <div class="abstracts">
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
                 @endforeach
               </div>




          </div>
        </div>
      @endforeach

    </div>
 @endsection
