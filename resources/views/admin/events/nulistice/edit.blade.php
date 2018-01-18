@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
                <form class="form-horizontal" role="form" method="POST" action="{{ route('nulisticeEvent.update', ['id'=>$nulisticeEventObject->id]) }}">
                    <input name="_method" type="hidden" value="PATCH">
                    {{ csrf_field() }} 

                    <div class="col-xs-12 col-md-12">
                            <div class="form-group label-floating padding-right-10 {{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title" class="control-label">Presentation Title</label>
        
                                <div class="">
                                    <input required id="title" type="text" class="form-control" name="title" value="{{ $nulisticeEventObject->title}}" autofocus> 
                                    @if ($errors->has('title'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span> 
                                    @endif
                                </div>
                            </div> 
        
                            <div class="form-group label-floating padding-right-10 {{ $errors->has('room') ? ' has-error' : ''}}">
                                <label for="room" class="control-label">Room</label>
        
                                <div class="">
                                    <input required id="room" type="text" class="form-control" name="room" value="{{ $nulisticeEventObject->room}}" autofocus>
                                    @if ($errors->has('room'))
                                        <span class"help-block">
                                            <strong>{{ $errors->first('room') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
        
                            <div class="form-group label-floating padding-right-10 {{ $errors->has('time') ? ' has-error' : ''}}">
                                <label for="time" class="control-label">Time</label>
        
                                <div class="">
                                    <input required id="time" type="text" class="form-control" name="time" value="{{$nulisticeEventObject->time}}">
                                    @if ($errors->has('time'))
                                        <span class"help-block">
                                            <strong>{{ $errors->first('time') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group label-floating padding-right-10 {{ $errors->has('session_title') ? ' has-error' : ''}}">
                                <label for="session_title" class="control-label">Session Title</label>
        
                                <div class="">
                                    <input required id="session_title" type="text" class="form-control" name="session_title" value="{{$nulisticeEventObject->session_title}}">
                                    @if ($errors->has('session_title'))
                                        <span class"help-block">
                                            <strong>{{ $errors->first('session_title') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
        
                            <div class="form-group label-floating padding-right-10 {{ $errors->has('keynote') ? ' has-error' : '' }}">
                                <label for="keynote" class=" control-label">Keynote</label>
        
                                <div class="">
                                    <textarea rows="5" required id="keynote" type="text" class="form-control" name="keynote">{{ $nulisticeEventObject->keynote }}</textarea>
                                    @if ($errors->has('keynote'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('keynote') }}</strong>
                                        </span> 
                                    @endif
                                </div>
                            </div>

                        <div class="form-group label-floating padding-right-10 {{ $errors->has('chair') ? ' has-error' : ''}}">
                            <label for="chair" class="control-label">Chair</label>
    
                            <div class="">
                                <input required id="chair" type="text" class="form-control" name="chair" value="{{$nulisticeEventObject->chair}}">
                                @if ($errors->has('chair'))
                                    <span class"help-block">
                                        <strong>{{ $errors->first('chair') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group label-floating padding-right-10 {{ $errors->has('chair_country') ? ' has-error' : ''}}">
                            <label for="chair_country" class="control-label">Chair Country</label>
    
                            <div class="country-flex">
                                <input hidden id="flag" name="chair-country-flag" type="text" value="chair_country_flag">
                                <img  height="36px" id="chair-country-flag" src="chair_country_flag" class="image-flex">
                                <input required class="country-flag-flex" id="chair_country" type="text" class="form-control" name="chair_country" value="{{$nulisticeEventObject->chair_country}}" data-provide="typeahead">
                                @if ($errors->has('chair_country'))
                                    <span class"help-block">
                                        <strong>{{ $errors->first('chair_country') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group label-floating padding-right-10 {{ $errors->has('presenter') ? ' has-error' : ''}}">
                            <label for="presenter" class="control-label">Presenter</label>
    
                            <div class="">
                                <input required id="presenter" type="text" class="form-control" name="presenter" value="{{$nulisticeEventObject->presenter}}">
                                @if ($errors->has('presenter'))
                                    <span class"help-block">
                                        <strong>{{ $errors->first('presenter') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group label-floating padding-right-10 {{ $errors->has('presenter_country') ? ' has-error' : ''}}">
                                <label for="presenter_country" class="control-label">Presenter Country</label>
        
                                <div class="country-flex">
                                        <input hidden id="flag" name="presenter-country-flag" type="text" value="presenter_country_flag">
                                        <img  height="36px" id="presenter-country-flag" src="presenter_country_flag" class="image-flex">
                                        <input required class="country-flag-flex" id="presenter_country" type="text" class="form-control" name="presenter_country" value="{{$nulisticeEventObject->presenter_country}}" data-provide="">
                                        @if ($errors->has('presenter_country'))
                                            <span class"help-block">
                                                <strong>{{ $errors->first('presenter_country') }}</strong>
                                            </span>
                                        @endif
                                </div>
                        </div>
                        
                        <div class="modal-footer-ftth">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>                                  
                            </div>
                        </div>
                    </div>                                         
                </form>
        </div>
    </div>
@endsection