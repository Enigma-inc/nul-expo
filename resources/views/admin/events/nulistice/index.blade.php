@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <a href="{{route('nulisticeEvent.create')}}" class="btn btn-info btn-xs pull-right"> Add Event</a>
            <div class="panel panel-primary">
                <div class="panel-heading">Nulistice Events</div>
    
                <div class="panel-body">
                     <nulistice-admin-page></nulistice-admin-page>
                  
                </div>
            </div>
        </div>
    </div>
@endsection