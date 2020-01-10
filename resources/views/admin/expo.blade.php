@extends('layouts.app')

@section('content')

   <div class="row col-xs-12" style="margin-bottom:10px">
        <div class="btn-group">
        <a href="{{route('admin.expo',['status'=>'all'])}}" class="btn  {{ $status=='all' ? 'btn-primary' : '' }}">ALL</a>
        <a href="{{route('admin.expo',['status'=>'approved'])}}"  class="btn {{ $status=='approved' ? 'btn-primary' : '' }}">Accept</a>
        <a href="{{route('admin.expo',['status'=>'declined'])}}"  class="btn {{ $status=='declined' ? 'btn-primary' : '' }}">NOT APPROVED</a>
        </div>
    </div>
    <div class="row col-xs-12">
     @if($expoApplications->count()>0)
     @foreach ($expoApplications as $index =>$expoApplication)
         <div class=" admin-abstract-list ">
           <div class="image" style="text-align:center">
             <img width="100%" src="{{$expoApplication->country_flag}}" alt="flag">
                <h2>{{$index +1}}</h2>
                 <small >{{$expoApplication->created_at->diffForHumans()}}</small>
           </div>
           <div class="panel panel-default col-xs-12 padding-0">

              <div class="details panel-body padding-5">
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
                        @if($expoApplication->status==0)
                            <div class="button">
                                <form action="{{route('expo.approve', ['id'=>$expoApplication->id])}}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="file-name" value="$expoApplication->id">
                                    <button type="submit" class="btn btn-success btn-xs margin-right-2"> <i class="fa fa-check"></i> Approve</button>
                                </form>
                            </div>
                        @elseif($expoApplication->status==1)
                            <div class="button">
                                <form action="{{route('expo.decline', ['id'=>$expoApplication->id])}}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="file-name" value="$expoApplication->id">
                                    <button type="submit" class="btn btn-danger btn-xs margin-right-2"> <i class="fa fa-close"></i> Decline</button>
                                </form>
                            </div>
                        @endif
                    </div>
                    <div class="footer">
                        <p class="footer-text-expo">{{$expoApplication->summary}}</p>
                    </div>
                </div>
              </div>
            </div>
         </div>

     @endforeach
     @else
        <div class="alert alert-info" role="alert">
            There are no applications on this stage.
        </div>         
      @endif
      <div class="pagination-links">
         {{ $expoApplications->links() }}
      </div>
   </div>
@endsection
