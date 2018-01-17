@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
                <form class="form-horizontal" role="form" method="POST" action="{{ route('generalEvent.update', ['id'=>$generalEventObject->id]) }}">
                    <input name="_method" type="hidden" value="PATCH">
                    {{ csrf_field() }} 

                    <div class="col-xs-12 col-md-12">
                            <div class="form-group label-floating padding-right-10 {{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title" class="control-label">Presentation Title</label>
        
                                <div class="">
                                    <input required id="title" type="text" class="form-control" name="title" value="{{ $generalEventObject->title}}" autofocus> 
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
                                    <input required id="room" type="text" class="form-control" name="room" value="{{ $generalEventObject->room}}" autofocus>
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
                                    <input required id="time" type="text" class="form-control" name="time" value="{{$generalEventObject->time}}">
                                    @if ($errors->has('time'))
                                        <span class"help-block">
                                            <strong>{{ $errors->first('time') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
        
                            <div class="form-group label-floating padding-right-10 {{ $errors->has('body') ? ' has-error' : '' }}">
                                <label for="body" class="control-label">Description</label>
        
                                <div class="">
                                    <textarea rows="5" required id="body" type="text" class="form-control" name="body">{{ $generalEventObject->body }}</textarea>
                                    @if ($errors->has('body'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('body') }}</strong>
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