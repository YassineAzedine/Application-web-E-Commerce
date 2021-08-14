@component('mail::message')
# Commande confirmée pour retrait en 30 MIN

Merci pour votre commande, veuillez commander à nouveau.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
