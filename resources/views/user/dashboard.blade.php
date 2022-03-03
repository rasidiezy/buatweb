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
          <div class="row my-5">
              @include('components.alert')
              <table class="table">
                  <tbody>
                    @forelse ($checkouts as $item)
                    <tr class="align-middle">
                        <td width="18%">
                            <img src="{{ asset('/images/item_bootcamp.png') }}" height="120" alt="">
                        </td>
                        <td>
                            <p class="mb-2">
                                <strong>{{ $item->Paket->judul }}</strong>
                            </p>
                            <p>
                                {{ $item->created_at->format('M d Y') }}
                            </p>
                        </td>
                        <td>
                            <strong>Rp. {{@currency($item->Paket->harga) }}</strong>
                        </td>
                        <td>
                             @if ($item->payment_status == 'waiting')
                             <strong class="text-capitalize text-warning"> {{ $item->payment_status }}</strong>
                             @else
                             <strong class="text-capitalize text-success"> {{ $item->payment_status }}</strong>
                             @endif
                        </td>
                        <td class="text-center">
                            @if ($item->payment_status == 'waiting')
                            <a href="{{ $item->midtrans_url }}" class="btn btn-primary "> Bayar Disini</a>
                            @endif
                        </td>
                        <td>
                            <a href="https://wa.me/085158580660?text=Hi, saya telah memesan kelas {{ $item->Paket->judul }}" class="btn btn-secondary">
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