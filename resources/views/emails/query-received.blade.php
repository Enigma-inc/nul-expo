
@component('mail::message')
#{{$query->name}} submitted a message
@component('mail::panel')
Below are the details of the message.
@endcomponent


@component('mail::table')
|                |    |
| -------------  | --------:|
| **Title**  | {{$query->subject}}      |
| **Name**  | {{$query->name}}      |
| **Email**  | {{$query->email}}      |
| **Message**  | {{$query->message}}      |
@endcomponent
@component('mail::button', ['url' => 'http://www.nulistice.org.ls/messages', 'color' => 'red'])
View All Submitted Messages
@endcomponent
@endcomponent
