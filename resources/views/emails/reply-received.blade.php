@component('mail::message')
#Reply from {{$reply->name}} 


@component('mail::message')
#{{$reply->name}} submitted a reply
@component('mail::panel')
Below are the details of the reply.
@endcomponent


@component('mail::table')
|                |    |
| -------------  | --------:|
| **Title**  | {{$reply->subject}}      |
| **Name**  | {{$reply->name}}      |
| **Email**  | {{$reply->email}}      |
| **Message**  | {{$reply->reply}}      |
@endcomponent
@endcomponent