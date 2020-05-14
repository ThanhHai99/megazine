@component('mail::message')
Hello motherfucker

Welcome to our website.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
