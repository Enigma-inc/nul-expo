@extends('partials.master') 

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Apply for Hackathon</div>
                <div class="panel-body">
                    {{--  <div class="text-center">
                        <em><strong>You will need to have an account for you to upload or modify your abstract</strong></em>
                        <hr>
                    </div>  --}}
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('hackathon.sent-application') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

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
                                <input id="surname" type="text" class="form-control" name="surname" value="{{ old('surname') }}" >

                                @if ($errors->has('surname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('members') ? ' has-error' : '' }}">
                            <label for="members" class="col-md-4 control-label">Total Members</label>

                            <div class="col-md-6">
                                <input id="members" type="number" class="form-control" name="members" min="1" max="5" required>
                                @if ($errors->has('members'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('members') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Apply for Hackathon
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