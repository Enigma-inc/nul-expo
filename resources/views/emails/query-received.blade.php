@component('mail::message')
#{{$query->name}} submitted a query
@component('mail::panel')
Below are the details of submission.
@endcomponent


@component('mail::table')
|                |    |
| -------------  | --------:|
| **Name**  | {{$query->name}}      |
| **Email** | {{$query->email}}      |
| **Message** | {{$query->message}}    |
@endcomponent
@component('mail::button', ['url' => 'http://127.0.0.1:8000/messages', 'color' => 'red'])
View All Submitted Queries
@endcomponent
@endcomponent