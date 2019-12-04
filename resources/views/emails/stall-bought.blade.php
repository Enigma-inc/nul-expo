@component('mail::message')
    New booking for stall from <b>{{ $stall['name'] }}</b>.<br><br>

    Names: {{ $stall['name'] }} 
    Email: {{ $stall['email'] }} 
    @if ($stall['summary'])
        Summary: {{ $stall['summary'] }}
    @endif
@endcomponent