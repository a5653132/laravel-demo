@component('mail::message')
# Deploy Email

The body of your message.

@component('mail::button', ['url' => 'http://test.com'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
