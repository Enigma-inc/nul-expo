@component('mail::message')
    New booking for stall from <b>{{ $stall['name'] }}</b>.<br><br>

    Names: {{ $stall['name'] }} 
    Email: {{ $stall['email'] }} 
    Summary: {{ $stall['summary'] }}
@endcomponent