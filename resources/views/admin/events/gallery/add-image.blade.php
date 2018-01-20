@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-primary">
                <div class="panel-heading">Image Upload</div>
    
                <div class="panel-body">
                     <upload-gallery-image></upload-gallery-image>
                </div>
            </div>
        </div>
    </div>
@endsection