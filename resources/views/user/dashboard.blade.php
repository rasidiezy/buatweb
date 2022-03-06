@extends('layouts.app')

@section('content')
<section class="dashboard my-5">
      <div class="container">
          <div class="row text-left">
              <div class=" col-lg-12 col-12 header-wrap mt-4">
                  <p class="story">
                      DASHBOARD
                  </p>
                  <h2 class="primary-header ">
                      Paket Saya
                  </h2>
              </div>
          </div>
          <div class="my-5 table">
              @include('components.alert')
              <table class="table">
                  <tbody>
                    @forelse ($checkouts as $item)
                    <tr class="spacer align-middle">
                        <td> 
                            @if ($item->paket_id == 1)
                            <img  src="{{ asset('/images/item_bootcamp.png') }}" height="120" alt="">
                            @else
                            <img src="{{ asset('/images/item.png') }}" height="120" alt="">
                            @endif
                        </td>
                        <td >
                            <p class="mb-2">
                                <strong>{{ $item->Paket->judul }}</strong>
                            </p>
                            <p>
                                {{ $item->created_at->format('M d Y') }}
                            </p>
                        </td>
                        <td data-heading="Harga">
                            <strong>Rp. {{@currency($item->total) }}</strong>
                            @if ($item->discount_id) <br>
                                <span class="badge bg-danger">Diskon {{ $item->diskon_persentase }}%</span>
                            @endif
                        </td>
                        <td data-heading="Status Pembayaran">
                             @if ($item->payment_status == 'waiting')
                             <strong class="text-capitalize badge bg-warning">Menunggu Pembayaran</strong>
                             @else
                             <strong class="text-capitalize badge bg-success"> {{ $item->payment_status }}</strong>
                             @endif
                        </td>
                        <td class="text-center">
                            @if ($item->payment_status == 'waiting')
                            <a href="{{ $item->midtrans_url }}" class="btn btn-primary btn-sm "> Bayar Disini</a>
                            @endif
                        </td>
                        <td>
                            <a href="https://wa.me/085158580660?text=Hi, saya telah memesan kelas {{ $item->Paket->judul }}" class="btn btn-secondary btn-sm">
                                Kontak Kami
                            </a>
                        </td>
                    </tr>
                    @empty
                        <tr>
                              <td colspan="5">Tidak Ada Data</td>
                        </tr>
                    @endforelse
                  </tbody>
              </table>
          </div>
      </div>
  </section>
@endsection