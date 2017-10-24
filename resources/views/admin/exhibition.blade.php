@extends('layouts.app')

@section('content')
    <div class="row col-xs-12" style="margin-bottom:10px">
        <div class="btn-group">
        <a href="{{route('admin.exhibition',['status'=>'all'])}}" class="btn  {{ $status=='all' ? 'btn-primary' : '' }}">ALL</a>
        <a href="{{route('admin.exhibition',['status'=>'approved'])}}"  class="btn {{ $status=='approved' ? 'btn-primary' : '' }}">APPROVED</a>
        <a href="{{route('admin.exhibition',['status'=>'declined'])}}"  class="btn {{ $status=='declined' ? 'btn-primary' : '' }}">DECLINED</a>
        </div>
    </div>
   <div>
   @if($exhibitionApplications->count()>0)
     @foreach ($exhibitionApplications as $index =>$exhibitionApplication)
         <div class=" admin-abstract-list col-xs-12">
           <div class="image">
             <img width="100%" src="{{$exhibitionApplication->country_flag}}" alt="flag">
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
                    <div class="body-flex">
                        <div class="conference badge">
                            {{$exhibitionApplication->option}}
                        </div>
                        @if($exhibitionApplication->status==0)
                        <div class="button">
                            <form action="{{route('exhibition.approve', ['id'=>$exhibitionApplication->id])}}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="file-name" value="$exhibitionApplication->id">
                                <button type="submit" class="btn btn-success btn-xs margin-right-2"> <i class="fa fa-check"></i> Approve</button>
                            </form>
                        </div>
                        @elseif($exhibitionApplication->status==1)
                        <div class="button">
                            <form action="{{route('exhibition.decline', ['id'=>$exhibitionApplication->id])}}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="file-name" value="$exhibitionApplication->id">
                                <button type="submit" class="btn btn-danger btn-xs margin-right-2"> <i class="fa fa-times"></i> Decline</button>
                            </form>
                        </div>
                        @endif
                    </div>
                    <div class="footer">
                        <p class="footer-text-expo">{{$exhibitionApplication->summary}}</p>
                    </div>
                </div>
              </div>
            </div>
         </div>
     @endforeach
     @else
      <div class="alert alert-info" role="alert">
          There are no exhibition applications yet.
      </div>
      @endif
      <div class="pagination-links">
         {{ $exhibitionApplications->links() }}
      </div>
   </div>
   
@endsection
