@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel">
            <div class="panel-body">
                 <add-edit-nulistice-event :conference="'nulistice'" :event-id="1"></add-edit-nulistice-event>
            </div>
        </div>
    </div>
@endsection
