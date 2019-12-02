@component('mail::message')
    New booking for hackathon from <b>{{ $hackathon['name'] }}</b>.<br><br>

    <b>First Name:</b> {{ $hackathon['surname'] }} <br>
    <b>Email:</b> {{ $hackathon['email'] }} <br>
    <b>Message:</b> {{ $hackathon['members'] }}
@endcomponent