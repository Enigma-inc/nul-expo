@component('mail::message')
#Message from {{$query->name}} 


@component('mail::table')
|                |    |
| -------------  | --------:|
| **Name**  | {{$query->name}}      |
| **Email** | {{$query->email}}      |
| **Message** | {{$query->message}}    |
@endcomponent
@component('mail::button', ['url' => 'http://www.nulistice.org.ls', 'color' => 'red'])
View All Messages
@endcomponent
@endcomponent