 @extends('layouts.app')

 @section('content')
    <div class="admin-home">
        <div class="panel panel-abstracts  col-xs-12 col-sm-12">
          <a href="{{route('admin.abstracts',['conference'=>'all'])}}">
          <div class="panel-body">
              <h1>ALL Abstracts
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
        <div class="panel panel-abstracts col-xs-12 col-sm-5 ">
          <a href="{{route('admin.abstracts',['conference'=>'nulistice'])}}">
            <div class="panel-body">
                <h1>NULISTICE Abstracts
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
        <div class="panel panel-abstracts col-xs-12 col-sm-5 col-sm-offset-2">
          <a href="{{route('admin.abstracts',['conference'=>'reris'])}}">
          <div class="panel-body">
              <h1>RERIS Abstracts<br>
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
        <div class="panel panel-expo col-xs-12 col-sm-5 ">
          <a href="{{route('admin.expo')}}">
            <div class="panel-body">
                <h1>Expo Applications
                  <div class="summary-container">
                    <div class="authors">
                      <span>Approve</span>
                      <small>({{$approvedExpo}})</small>
                    </div>
                    <div class="abstracts">
                      <span>Not Approved</span>
                      <small class="text-success">({{$notApprovedExpo}})</small>
                    </div>
                  </div>
                </h1>
            </div>
          </a>
        </div>
        <div class="panel panel-exhibition col-xs-12 col-sm-5 col-sm-offset-2">
          <a href="{{route('admin.exhibition')}}">
          <div class="panel-body">
              <h1>Hackathon Applications<br>
                <div class="summary-container">
                  <div class="authors">
                    <span>Approved</span>
                    <small>({{$approvedExhbition}})</small>
                  </div>
                  <div class="abstracts">
                    <span>Not Approved</span>
                    <small>({{$notApprovedExhibition}})</small>
                  </div>
                </div>
              </h1>
          </div>
        </a>
        </div>
       
    </div>

 @endsection
