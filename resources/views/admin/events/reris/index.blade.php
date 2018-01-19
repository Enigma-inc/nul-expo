@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <a href="{{route('rerisEvent.create')}}" class="btn btn-info btn-xs pull-right"> Add Event</a>
            <div class="panel panel-primary">
                <div class="panel-heading">Reris Events</div>
    
                <div class="panel-body">
                     <reris-admin-page></reris-admin-page>
                  
                </div>
            </div>
        </div>
    </div>
@endsection