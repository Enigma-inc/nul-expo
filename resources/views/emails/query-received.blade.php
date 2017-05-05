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
=======
@component('mail::button', ['url' => 'http://www.nulistice.org.ls', 'color' => 'red'])
View All Messages
>>>>>>> 894e084d12d4233f0b4d97bdc9647219016b925d
@endcomponent
@endcomponent