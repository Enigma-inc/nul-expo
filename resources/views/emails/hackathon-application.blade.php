@component('mail::message')
    New booking for hackathon from <b>{{ $hackathon['names'] }}</b>.<br><br>

    Names: {{ $hackathon['names'] }} 
    Email: {{ $hackathon['email'] }} 
    Members: {{ $hackathon['members'] }}
@endcomponent