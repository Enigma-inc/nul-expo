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
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class=" header">Abstract</div>
                            </div>

                            <div class="panel-body">
                                <div class="file-container">
                                    <div>{{Auth::user()->submission->abstract}}</div>
                                    @if(Auth::user()->submission->abstract)
                                    <div>
                                            <form action="{{route('abstract.download')}}" method="POST">
                                                {{csrf_field()}}
                                                <input type="text" name="file-name" value="{{Auth::user()->submission->abstract}}" hidden>
                                                <button type="submit" class="btn btn-primary btn-xs"> <i class="fa fa-download"></i> Download</button>
                                            </form>
                                    </div>
                                    @endif

                                </div>
                            </div>
                        </div>
                   <div class="row">
                       <div id="app" class="auto-container">
                           <div class="text-align-just wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                             @include('abstract-upload.nulistice')
                           </div>
                       </div>
                   </div>
                    </div>
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
    </script>
@endsection
