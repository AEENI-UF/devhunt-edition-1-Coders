@component('mail::message')
{{ $data['title'] }}

Bonjour {{ $data['nom']}}.
@component('mail::button', ['url' => route('home')])
Redirect vers l'application
@endcomponent

Merci bcp de votre comprehension!
