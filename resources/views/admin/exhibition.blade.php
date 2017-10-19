@extends('layouts.app')

@section('content')
   <div>
     @foreach ($exhibitionApplications as $index =>$exhibitionApplication)
         <div class=" admin-abstract-list col-xs-12">
           <div class="image">
             <img width="60px" src="{{$exhibitionApplication->country_flag}}" alt="flag">
                <h2>{{$index +1}}</h2>
           </div>
           <div class="panel panel-default col-xs-12">

              <div class="details panel-body">
                <div class="table-header">
                   <div class="head-item">
                     {{$exhibitionApplication->names}}
                   </div>
                   <div class="head-item">
                     {{$exhibitionApplication->company}}
                   </div>
                   <div class="head-item">
                     {{$exhibitionApplication->country}}
                   </div>
                   <div class="head-item ">
                     <div class="contacts">
                       <small>
                         {{$exhibitionApplication->country_phone_code.' '.$exhibitionApplication->phone}}
                       </small>
                       <small>
                          <a href="mailto:{{$exhibitionApplication->email}}">{{$exhibitionApplication->email}}</a>
                       </small>
                     </div>

                   </div>
                </div>

                <div class="abstracts">
                    <div class="body">
                        <div class="conference badge">
                            {{$exhibitionApplication->option}}
                        </div>
                        <div class="button">
                            <form action="{{route('exhibition.approve')}}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="file-name" value="">
                                <button type="submit" class="btn btn-success btn-xs margin-right-2"> <i class="fa fa-download"></i> Approve</button>
                            </form>
                        </div>
                    </div>
                    <div class="footer">
                        <p class="footer-text-expo">{{$exhibitionApplication->summary}}</p>
                    </div>
                </div>
              </div>
            </div>
         </div>

     @endforeach
      <div class="pagination-links">
         {{ $exhibitionApplications->links() }}
      </div>
   </div>
@endsection
