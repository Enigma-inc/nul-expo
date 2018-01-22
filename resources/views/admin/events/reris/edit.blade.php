@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
             <add-edit-nulistice-event :conference="'reris'" :event-id="{{$rerisEventObject->id}}"></add-edit-nulistice-event>
        </div>
    </div>
@endsection