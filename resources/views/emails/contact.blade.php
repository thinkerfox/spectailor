@component('mail::message')
# {{ $name }}  Size bir mesaj gönderdi

{!! $body !!}

<hr>
Email: {{ $email }} <br>
@endcomponent