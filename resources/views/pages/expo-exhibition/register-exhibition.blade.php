@extends('partials.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <center class="panel-heading">Application for Hackathon</center>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST"
                                action="{{ route('exhibition.register') }}">
                            {{ csrf_field() }}
                                <div class="form-group{{ $errors->has('names') ? ' has-error' : '' }}">
                                    <label for="names" class="col-md-4 control-label">Contact Person Names</label>

                                    <div class="col-md-8">
                                        <input id="names" type="text" class="form-control" name="names"
                                                value="{{old('names')}}"
                                                required>

                                        @if ($errors->has('names'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('names') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">Contact Person Email</label>

                                    <div class="col-md-8">
                                        <input id="email" type="text" class="form-control" name="email"
                                                value="{{old('email')}}"
                                                required>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                                    <label for="country" class="col-md-4 control-label">Country</label>

                                    <div class="col-md-8" style="display: flex">
                                        <input hidden id="flag" name="country-flag"  type="text" value="https://restcountries.eu/data/lso.svg">
                                        <img  height="36px" id="country-flag" src="{{(old('country-flag')) ? old('country-flag') :'https://restcountries.eu/data/lso.svg'}}" style="flex:1">
                                        <input style="flex:9" id="country" type="text" class="form-control"
                                                name="country"
                                                value="{{(old('country')) ? old('country') :'Lesotho'}}" data-provide="typeahead" required>

                                        @if ($errors->has('country'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('country') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                    <label for="phone" class="col-md-4 control-label">Phone</label>

                                    <div class="col-md-8" style="display: flex">
                                        <input readonly style="flex:1;min-width: 60px;" id="phone-code" type="text"
                                                class="form-control " name="phone-code" value="+266" required>
                                        <input style="flex:9" id="phone" type="text" class="form-control"
                                                name="phone"
                                                value="{{old('phone')}}" required>

                                        @if ($errors->has('phone'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('phone') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('members') ? ' has-error' : '' }}">
                                    <label for="members" class="col-md-4 control-label">Total Members</label>

                                    <div class="col-md-8">
                                        <input id="members" type="number" class="form-control" name="members" min="1" max="5" required autofocus>
                                        @if ($errors->has('members'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('members') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div>
                                    <label for="phone" class="col-md-4 control-label"></label>
                                    <div class="g-recaptcha col-md-6" data-sitekey="6LfOkMUUAAAAABP02YYkHRC8s8f-8o48L3vPhxP2"></div>
                                </div>
                            <div class="form-group">
                                <div style="padding-top:10px;" class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="panel-footer" style="text-align: right;">
                        <div>
                            Wanna showcase something?
                            <a class="btn btn-primary btn-xs" href="{{ route('expo.register.view') }}">
                                Buy stall
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
        var $input = $("#country");
        var flag = $('#country-flag');
        if(!flag.attr('src')){
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
                    if(!flag.attr('src')){
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
