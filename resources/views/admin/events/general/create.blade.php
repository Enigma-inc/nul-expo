@extends('layouts.app')

@section('content')
    <div class="container">
            <form class="form-horizontal" role="form" method="POST" action="{{route('generalEvent.store')}}">
                {{ csrf_field() }}
 
                <div class="col-xs-12 col-md-12">
                    <div class="form-group label-floating padding-right-10 {{ $errors->has('title') ? ' has-error' : '' }}">
                        <label for="title" class="control-label">Presentation Title</label>

                        <div class="">
                            <input  id="title" type="text" class="form-control" name="title" value="{{ old('title') }}"> 
                            @if ($errors->has('title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span> 
                            @endif
                        </div>
                    </div> 


                    <div class="form-group label-floating padding-right-10 {{ $errors->has('time') ? ' has-error' : ''}}">
                        <label for="time" class="control-label">Time</label>

                        <div class="">
                            <input  id="time" type="text" class="form-control" name="time" value="{{ old('time') }}">
                            @if ($errors->has('time'))
                                <span class"help-block">
                                    <strong>{{ $errors->first('time') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group label-floating padding-right-10 {{ $errors->has('body') ? ' has-error' : '' }}">
                        <label for="body" class=" control-label">Body</label>

                        <div class="">
                            <textarea rows="5"  id="body" type="text" class="form-control" name="body" value="{{ old('body') }}"></textarea>
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
@endsection