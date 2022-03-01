@component('mail::message')
# Transaksi Kamu Berhasil Dikonfirmasi

Hi {{ $checkout->User->nama }}
<br>
Transaksi <b>{{ $checkout->Paket->judul }}</b> kamu berhasil dikonfirmasi, sekarang website impian anda didepan mata!

@component('mail::button', ['url' => route('user.dashboard')])
Dashboard Saya
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
