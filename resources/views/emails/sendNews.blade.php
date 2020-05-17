@component('mail::message')

Welcome to our website.

@component('mail::button', ['url' => ''])
Button Text
  <p>{{ $news['id'] }}</p>
  <p>{{ $news['image'] }}</p>
  <p>{{ $news['tag'] }}</p>
  <p>{{ $news['caption'] }}</p>
  <p>{{ $news['subtitle'] }}</p>
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
