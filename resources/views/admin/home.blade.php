 @extends('layouts.app')

 @section('content')
    <div class="admin-home">
        <div class="panel panel-default col-xs-12 col-sm-5 ">
          <a href="{{route('admin.abstracts',['conference'=>'nulistice'])}}">
            <div class="panel-body">
                <h1>NULISTICE 2018
                  <div class="summary-container">
                    <div class="authors">
                      <span>Authors</span>
                      <small>({{$nulisticeAuthors}})</small>
                    </div>
                    <div class="abstracts">
                      <span>Abstracts</span>
                      <small>({{$nulisticeCount}})</small>
                    </div>
                  </div>
                </h1>
            </div>
          </a>
        </div>
        <div class="panel panel-default col-xs-12 col-sm-5 col-sm-offset-2">
          <a href="{{route('admin.abstracts',['conference'=>'reris'])}}">
          <div class="panel-body">
              <h1>RERIS 2018 <br>
                <div class="summary-container">
                  <div class="authors">
                    <span>Authors</span>
                    <small>({{$rerisAuthors}})</small>
                  </div>
                  <div class="abstracts">
                    <span>Abstracts</span>
                    <small>({{$rerisCount}})</small>
                  </div>
                </div>
              </h1>
          </div>
        </a>
        </div>
        <div class="panel panel-default col-xs-12 col-sm-12">
          <a href="{{route('admin.abstracts',['conference'=>'all'])}}">
          <div class="panel-body">
              <h1>ALL
                <div class="summary-container">
                  <div class="authors">
                    <span>Authors</span>
                    <small>({{$allAuthors}})</small>
                  </div>
                  <div class="abstracts">
                    <span>Abstracts</span>
                    <small>({{$nulisticeCount+ $rerisCount}})</small>
                  </div>
                </div>
              </h1>
          </div>
        </a>
        </div>

 @endsection
