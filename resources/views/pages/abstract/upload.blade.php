@extends('partials.master') 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Submit Your Abstract for <strong class="text-uppercase">{{$conference}}</strong></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('abstract.upload',['user'=>Auth::user()->id]) }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                            <input type="text" hidden name="conference" value="{{$conference}}">
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">Title <small class="star">*</small></label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" >

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                            <label for="file" class="col-md-4 control-label">Document <small class="star">*</small></label>

                            <div class="col-md-6">
                                <input id="file" type="file" class="form-control" name="file"  >

                                @if ($errors->has('file'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('file') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
                            <label for="comment" class="col-md-4 control-label">Comments</label>

                            <div class="col-md-6">
                            
                                <textarea id="comment"  class="form-control" name="comment" rows="5"></textarea>

                                
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary pull-right">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection