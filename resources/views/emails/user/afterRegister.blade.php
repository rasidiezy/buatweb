@component('mail::message')
# Selamat Datang

Hi {{ $user->nama }}
<br>
Selamat datang di buatweb, akun anda telah berhasil dibuat. Sekarang anda bisa pilih paket website terbaik sesuai kebutuhan anda!

@component('mail::button', ['url' => route('welcome')])
Login Disini
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
