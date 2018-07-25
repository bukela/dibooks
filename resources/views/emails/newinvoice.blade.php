@component('mail::message')
# Imate novu fakturu

Hvala sto **poslujete** sa nama.

@component('mail::button', ['url' => 'http://dibooks.test/fakture'])
Go to invoice
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
