<x-mail::message>
# {{ __('messages.mail.welcome') }}

{{ $name }}, {{ __('messages.mail.account_created') }}

<x-mail::panel>
**Email:** {{ $email }}  
**Password:** {{ $password }}
</x-mail::panel>

<x-mail::button url="https://novaconsulting.com.mx/dashboard/login">
{{ __('messages.mail.login') }}
</x-mail::button>

{{ __('messages.mail.thanks') }},<br>
{{ config('app.name') }}
</x-mail::message>
