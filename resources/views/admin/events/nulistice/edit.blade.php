@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
             <add-edit-nulistice-event :conference="'nulistice'" :event-id="{{$nulisticeEventObject->id}}"></add-edit-nulistice-event>
        </div>
    </div>
@endsection