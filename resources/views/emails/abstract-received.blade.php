@component('mail::message')
#{{$user->fullName()}} submitted an abstract for {{$abstract->conference}}
@component('mail::panel')
Below are the details of submission, abstract document is attached.
@endcomponent


@component('mail::table')
|                |    |
| -------------  | --------:|
| **Title**  | {{$user->submission->title}}      |
| **Name**  | {{$user->submission->name}}      |
| **Surname**  | {{$user->submission->surname}}      |
| **Organisation**  | {{$user->submission->organisation}}      |
| **Country**  | {{$user->submission->country}}      |
| **Phone**  | {{$user->submission->phone_code}} {{$user->submission->phone}}     |
| **Email**  | {{$user->email}}    |
| **conference**  | {{$abstract->conference}}    |
| **Comments**  | {{$abstract->comment}}    |
@endcomponent
@component('mail::button', ['url' => 'http://www.nulistice.org.ls/all-abstracts', 'color' => 'red'])
View All Submitted Abstracts
@endcomponent
@endcomponent
