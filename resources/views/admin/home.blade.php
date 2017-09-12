 @extends('layouts.app')

 @section('content')
    <div class="admin-home">
        <div class="panel panel-default col-xs-12 col-sm-5 ">
          <a href="{{route('admin.abstracts',['conference'=>'nulistice'])}}">
            <div class="panel-body">
                <h1>NULISTICE 2018
                  <br> <small>({{$nulisticeCount}})</small>
                </h1>
            </div>
          </a>
        </div>
        <div class="panel panel-default col-xs-12 col-sm-5 col-sm-offset-2">
          <a href="{{route('admin.abstracts',['conference'=>'reris'])}}">
          <div class="panel-body">
              <h1>RERIS 2018 <br> <small>({{$rerisCount}})</small>
              </h1>
          </div>
        </a>
        </div>
        <div class="panel panel-default col-xs-12 col-sm-12">
          <a href="{{route('admin.abstracts',['conference'=>'all'])}}">
          <div class="panel-body">
              <h1>ALL
                <br> <small>({{$nulisticeCount + $rerisCount}})</small>
              </h1>
          </div>
        </a>
        </div>

 @endsection
