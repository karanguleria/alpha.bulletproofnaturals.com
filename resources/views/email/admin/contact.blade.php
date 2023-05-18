@component('mail::message')
# Contact Request

**Contact Email:** {{ $contact->email }}<br>
**Contact Name:** {{ $contact->name }}<br>
**Contact Message :** {{ $contact->message }}

Regards,<br>
{{ config('app.name') }}
@endcomponent
