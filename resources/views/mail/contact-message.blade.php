<x-mail::message>
# New Contact Message

**Name:** {{ $name }}

**Email:** {{ $email }}

**Subject:** {{ $subject }}

**Message:**
{{ $message }}

Thanks,

{{ config('app.name') }}
</x-mail::message>
