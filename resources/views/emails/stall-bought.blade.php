@component('mail::message')
    New booking for stall from <b>{{ $stall['name'] }}</b>.<br><br>

    Names: {{ $stall['name'] }} <br>
    Email: {{ $stall['email'] }} <br>
    @if ($stall['summary'])
        Summary: {{ $stall['summary'] }}
    @endif
@endcomponent