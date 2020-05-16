@component('mail::message')
Hello motherfucker

Welcome to our website.

@component('mail::button', ['url' => ''])
Button Text
  <a href="http://localhost/megazine/public/password/reset">
    http://localhost/megazine/public/password/reset
  </a>
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
