<!-- @component('mail::message') -->

Welcome to our website.

<!-- @component('mail::button', ['url' => '']) -->
Button Text
  <a href="https://megazine.com/public/password/reset/{{$user['remember_token']}}">
    https://megazine.com/public/password/reset/{{$user['remember_token']}}
  </a>
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
