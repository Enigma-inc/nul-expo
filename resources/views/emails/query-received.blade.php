@component('mail::message')
#Message from {{$query->name}} 


@component('mail::table')
|                |    |
| -------------  | --------:|
| **Name**  | {{$query->name}}      |
| **Email** | {{$query->email}}      |
| **Message** | {{$query->message}}    |
@endcomponent
<<<<<<< HEAD
@component('mail::button', ['url' => 'http://127.0.0.1:8000/messages', 'color' => 'red'])
View All Submitted Queries
@component('mail::button', ['url' => 'http://www.nulistice.org.ls/messages', 'color' => 'red'])
View All Messages
@endcomponent
@endcomponent