@component('mail::message')
# Pembelian Paket: {{ $checkout->Paket->judul }}

Hi {{$checkout->User->nama}}
<br> 
Terima kasih telah membeli paket <b>{{ $checkout->Paket->judul }}</b> Mohon lihat intruksi pembayaran dengan mengklik tombol dibawah ini.
@component('mail::button', ['url' => route('dashboard')])
Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
