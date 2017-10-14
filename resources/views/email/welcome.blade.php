@component('mail::message')
# Bienvenido {{ $name }} a Arcoders

The body of your message.

@component('mail::button', ['url' => 'cursos'])
Ver cursos Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
