@extends('layouts.app')

@section('content')
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
              </div>
            </div>
         </div>

     @endforeach
      <div class="pagination-links">
         {{ $expoApplications->links() }}
      </div>
   </div>
@endsection
