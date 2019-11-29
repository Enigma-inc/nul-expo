@component('mail::message')
    New booking for stall from <b>{{ $stall['name'] }}</b>.<br><br>

    <b>First Name:</b> {{ $stall['surname'] }} <br>
    <b>Email:</b> {{ $stall['email'] }} <br>
    @if ($stall['summary'])
    <b>Message:</b> {{ $stall['summary'] }}
    @endif
@endcomponent