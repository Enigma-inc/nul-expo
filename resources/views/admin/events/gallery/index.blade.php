@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <a href="{{route('events.gallery.add')}}" class="btn btn-info btn-xs pull-right"> Add Images</a>
            <div class="panel panel-primary">
                <div class="panel-heading">Gallery</div>
    
                <div class="panel-body">
                      @foreach ($images as $image)
                          <div class="col-xs-6 col-md-3">
                              <img src="{{Storage::disk('s3')->url($image->thumbnail)}}" >
                          </div>
                      @endforeach
                    <div class="col-xs-12 text-center">
                        {{ $images->links() }}
                    </div>         
                </div>
            </div>
        </div>
    </div>
@endsection