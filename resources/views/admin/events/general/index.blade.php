@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <a href="{{route('generalEvent.create')}}" class="btn btn-info btn-xs pull-right"> Add Event</a>
            <div class="panel panel-primary">
                <div class="panel-heading">General Events</div>
    
                <div class="panel-body">
                    <general-events-admin-page></general-events-admin-page>
                </div>
            </div>
        </div>
    </div>
@endsection