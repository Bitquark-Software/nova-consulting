@component('mail::message')
# ¡Hola, {{ $user->name ?? 'bienvenido/a' }}! 👋

{{ __('Nos emociona mucho que te unas a nuestro portal de clientes. Tu cuenta ha sido creada con éxito y ya puedes empezar a gestionar tus tickets de soporte.') }}

---

@if (! empty($password))
@component('mail::panel')
**{{ __('Tu contraseña temporal es:') }}**
`{{ $password }}`

*{{ __('Por seguridad, te recomendamos cambiarla en los ajustes de tu perfil tras el primer inicio de sesión.') }}*
@endcomponent
@else
{{ __('Tu cuenta ya está lista para usar con las credenciales que proporcionaste.') }}
@endif

@component('mail::button', ['url' => route('login'), 'color' => 'primary'])
{{ __('Acceder a mi Panel') }}
@endcomponent

---

### {{ __('¿Necesitas ayuda?') }}
{{ __('Si tienes alguna duda sobre cómo crear tu primer ticket, nuestro equipo técnico está disponible para ayudarte.') }}

{{ __('Si no solicitaste esta cuenta, no te preocupes; puedes ignorar este correo de forma segura.') }}

¡{{ __('Gracias por confiar en nosotros!') }}<br>
El equipo de **{{ config('app.name') }}**
@endcomponent