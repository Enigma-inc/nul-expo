@extends('partials.master')
@section('content')
    <div class="container">
        @if(!Auth::guest()) 
            @if(!Auth::User()->details_captured)
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">Personal Details</div>
                            <div class="panel-body">
                                <form class="form-horizontal" role="form" method="POST"
                                      action="{{ route('submit.speaker.details') }}">
                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">Title</label>

                                        <div class="col-md-6">
                                            <input id="title" type="text" class="form-control" name="title"
                                                   value="{{(old('title')) ? old('title') : Auth::User()->submission->title}}"
                                                   required autofocus>

                                            @if ($errors->has('title'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('title') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">Name</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control" name="name"
                                                   value="{{(old('name')) ? old('name') : Auth::User()->submission->name}}"
                                                   required autofocus>

                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                                        <label for="surname" class="col-md-4 control-label">Surname</label>

                                        <div class="col-md-6">
                                            <input id="surname" type="text" class="form-control" name="surname"
                                                   value="{{(old('surname')) ? old('surname') : Auth::User()->submission->surname}}"
                                                   required>

                                            @if ($errors->has('surname'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('surname') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('organisation') ? ' has-error' : '' }}">
                                        <label for="organisation" class="col-md-4 control-label">Organisation</label>

                                        <div class="col-md-6">
                                            <input id="organisation" type="text" class="form-control"
                                                   name="organisation"
                                                   value="{{(old('organisation')) ? old('organisation') : Auth::User()->submission->organisation}}" required>

                                            @if ($errors->has('organisation'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('organisation') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                                        <label for="country" class="col-md-4 control-label">Country</label>

                                        <div class="col-md-6" style="display: flex">
                                            <input hidden id="flag" name="country-flag"  type="text" value="{{ Auth::User()->submission->country_flag}}">
                                            <img  height="36px" id="country-flag" src="{{ Auth::User()->submission->country_flag}}" style="flex:1">
                                            <input style="flex:9" id="country" type="text" class="form-control"
                                                   name="country"
                                                   value="{{ Auth::User()->submission->country}}" data-provide="typeahead" required>

                                            @if ($errors->has('country'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('country') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                        <label for="phone" class="col-md-4 control-label">Phone</label>

                                        <div class="col-md-6" style="display: flex">
                                            <input readonly style="flex:1" id="phone-code" type="text"
                                                   class="form-control" name="phone-code" value="{{ Auth::User()->submission->phone_code}}" required>
                                            <input style="flex:9" id="phone" type="text" class="form-control"
                                                   name="phone"
                                                   value="{{ Auth::User()->submission->phone}}" required>

                                            @if ($errors->has('phone'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('phone') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fa fa-save"></i> Save
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="row">
                    <div class="col-md-4 profile">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class=" header">{{Auth::user()->fullName()}}</div>
                            </div>

                            <div class="panel-body">
                                <div class="avatar-container">
                                    <img class="avatar thumbnail"  src="{{Auth::user()->submission->country_flag}}" alt="Image">
                                </div>


                                <div class="details-container">
                                    <div class="profile-label">Name</div>
                                    <div class="profile-info">{{Auth::user()->submission->title. " ".Auth::user()->submission->name. " ".Auth::user()->submission->surname}}</div>
                                </div>
                                <hr>

                                <div class="details-container">
                                    <div class="profile-label">Organisation</div>
                                    <div class="profile-info">{{Auth::user()->submission->organisation}}</div>
                                </div>
                                <hr>

                                <div class="details-container">
                                    <div class="profile-label">Country</div>
                                    <div class="profile-info">{{Auth::user()->submission->country}}</div>
                                </div>
                                <hr>

                                <div class="details-container">
                                    <div class="profile-label">Phone</div>
                                    <div class="profile-info">{{Auth::user()->submission->phone_code . " ".Auth::user()->submission->phone}}</div>
                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col-xs-12">
                                        <form role="form" action="{{route('enable.profile.edit',Auth::user()->id)}}" method="POST">
                                            {{ csrf_field() }}
                                            <button class="btn btn-primary btn-xs  col-xs-6"><i class="fa fa-pencil"></i> Edit Profile</button>
                                            <a class="btn btn-primary btn-xs  col-xs-6" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                               <i class="fa fa-lock"></i> Logout
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 profile">
                    <div id="app" class="row auto-container">
                           <div class="col-xs-12 col-md-6 margin-bottom-20 text-align-just  wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                             <a  class="btn btn-primary btn-sm col-xs-12 " href="{{route('abstract.upload.page',['conference'=>'nulistice'])}}">
                             <i class="fa fa-upload"></i> Upload Abstract for NULISTICE
                             </a>
                           </div>
                              <div class="col-xs-12 col-md-6 margin-bottom-20 text-align-just wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                             <a  class="btn btn-primary btn-sm col-xs-12 " href="{{route('abstract.upload.page',['conference'=>'reris'])}}">
                             <i class="fa fa-upload"></i> Upload Abstract for RERIS
                             </a>
                          </div>                          
                       </div>
                       <div id="topics" class="row topics">
                       
                       <div class="auto-container">
                           <div class="col-xs-12 listing-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="col-xs-12 col-sm-6">
                        <strong><div class="topics-header text-center">NULISTICE Topics</div></strong>
                            <div class="margin-top-10">
                                <ul>  
                                    <li> Biotechnology</li>                          
                                    <li> Environment and Natural resources management</li>
                                    <li> Food and water safety</li>
                                    <li> Climate change challenges and mitigation strategies
                                        for developing countries</li>
                                    <li> Agriculture and food security</li>
                                    <li> Material science and nano-technology</li>
                                    <li> Entrepreneurship and technology</li>
                                    <li> Information and Communication Technology</li>                                        
                                </ul>
                            </div>
                        </div>
                        <div class="inner col-xs-12 col-sm-6">
                        <strong><div class="topics-header text-center">RERIS Topics</div></strong>
                            <div class="margin-top-10">
                                <ul>
                                    <li> Grid connected renewable energy</li>
                                    <li> Decentralised renewable and household energy solutions</li>
                                    <li> Energy socioeconomics (e.g. policy, economics, legal, regulatory and social issues)</li> 
                                    <li> Promotion of energy research, innovation, education and entrepreneurship</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                       </div>
                   </div>
                   @if($abstracts->count()>0)
                        <div class="panel panel-default margin-top-10">
                            <div class="panel-heading">
                                <div class=" header">Submitted Abstracts</div>
                            </div>

                            <div class="panel-body">
                                @foreach ($abstracts as $abstract)

                                <div class="file-container bordered col-xs-12">
                                        <div class="abstract-details-container col-xs-12">
                                            
                                                <div class="abstract-title">{{ $abstract->title }}   </div>
                                                <div class="abstract-details">
                                                 <small class="color-primary">Submission for <strong>{{$abstract->conference}}</strong> </small>
                                                 <small><strong>Submitted on: </strong> {{$abstract->created_at->toFormattedDateString()}} | {{$abstract->created_at->diffForHumans()}} </small>
      
                                                </div>
                                        </div>
                                    
                                    <form action="{{route('abstract.download')}}" method="POST">
                                        {{csrf_field()}}
                                        <input type="text" name="file-name" value="{{$abstract->doc_path}}" hidden>
                                        <button type="submit" class="btn btn-primary btn-xs"> <i class="fa fa-download"></i> Download</button>
                                    </form>

                                </div>
                                        @endforeach
                                {{$abstracts->links()}}
                            </div>
                        </div>
                
                    @endif
                </div>


                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            @endif
        @endif

    </div>
@endsection

@section('scripts')
    <script>
        var $input = $("#country");
        var flag = $('#country-flag');

        if(!flag.val()){
            flag.hide();
        }

        $.get("https://restcountries.eu/rest/v2/all", function (data) {
            $input.typeahead({
                source: data,
                autoSelect: true
            });

        }, 'json');


        $input.change(function () {
            var current = $input.typeahead("getActive");
            if (current) {
                // Some item from your model is active!
                if (current.name == $input.val()) {
                    $('#phone-code').val('+' + current.callingCodes[0]);
                    $('#flag').val(current.flag);
                    var flag = $('#country-flag');
                    if(!flag.val()){
                        flag.hide();
                    }
                    if (current.flag) {
                        flag.attr('src', current.flag).show();
                    }
                    // This means the exact match is found. Use toLowerCase() if you want case insensitive match.
                } else {
                    // This means it is only a partial match, you can either add a new item
                    // or take the active if you don't want new items
                }
            } else {
                // Nothing is active so it is a new value (or maybe empty value)
            }
        });
        //Add slim scroll
        $(function(){
            $('#topics').slimScroll({
                height: '130px',
                color: '#e13f30',
                railVisible: true,
                alwaysVisible: true
            });
        });
    </script>
@endsection
