@component('mail::message')
    New booking for hackathon from <b>{{ $hackathon['names'] }}</b>.<br><br>

    Names: {{ $hackathon['names'] }} <br>
    Email: {{ $hackathon['email'] }} <br>
    Members: {{ $hackathon['members'] }}
@endcomponent