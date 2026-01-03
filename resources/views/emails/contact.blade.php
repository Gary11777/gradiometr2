<x-mail::message>
# New Contact Request

You have received a new message from the contact form.

**Name:** {{ $name }}  
**Email:** {{ $email }}  
**Phone:** {{ $phone }}

**Message:**  
{{ $message_body }}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>

