@extends('layouts.app')

@section('content')

<section class="checkout">
      <div class="container">
          <div class="row text-center pb-70">
              <div class="col-lg-12 col-12 header-wrap">
                  <p class="story">
                      BANGUN WEBSITE ANDA
                  </p>
                  <h2 class="primary-header">
                      Pesan Sekarang Juga
                  </h2>
              </div>
          </div>
          <div class="row justify-content-center">
              <div class="col-lg-9 col-12">
                  <div class="row">
                      <div class="col-lg-5 col-12">
                          <div class="item-bootcamp">
                              @if ($paket->slug == 'paket-maksimal')
                              <img src="{{ asset('/images/item_bootcamp.png') }}" alt="" class="cover">
                              @else
                              <img src="{{ asset('/images/item.png') }}" alt="" class="cover">
                              @endif
                             
                              <h1 class="package text-red text-uppercase">
                              {{ $paket->judul }}
                              </h1>
                              <p class="description">
                                  Kami akan membuatkan sebuah website impian sesuai keperluan anda, tidak perlu pusing untuk hiring web developer.
                              </p>
                          </div>
                      </div>
                      <div class="col-lg-1 col-12"></div>
                      <div class="col-lg-6 col-12">
                          <form action="{{ route('checkout.store', $paket->id) }}" class="basic-form" method="post">
                            @csrf
                              <div class="mb-4">
                                  <label class="form-label">Nama Lengkap</label>
                                  <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" value="{{ Auth::user()->nama }}" required>
                                  @if ($errors->has('name'))
                                  <div class=" text-center" role="alert">
                                  <p  class="text-danger">{{ $errors->first('name') }}</p>
                                </div>
                                  @endif
                              </div>
                              <div class="mb-4">
                                  <label class="form-label">Alamat Email</label>
                                  <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ Auth::user()->email }}" required>
                              </div>
                              @if ($errors->has('email'))
                              <div class=" text-center" role="alert">
                              <p  class="text-danger">{{ $errors->first('email') }}</p>
                            </div>
                              @endif
                              <div class="mb-4">
                                  <label class="form-label">Pekerjaan</label>
                                  <input type="text" name="pekerjaan" class="form-control  {{ $errors->has('pekerjaan') ? 'is-invalid' : '' }}" value="{{old('pekerjaan') ?: Auth::user()->pekerjaan }}" required>
                              </div>
                              @if ($errors->has('pekerjaan'))
                              <div class=" text-center" role="alert">
                              <p  class="text-danger">{{ $errors->first('pekerjaan') }}</p>
                            </div>
                              @endif
                            <div class="mb-4">
                                <label class="form-label">No Handphone</label>
                                <input type="text" name="no_telepon" class="form-control  {{ $errors->has('no_telepon') ? 'is-invalid' : '' }}" value="{{old('no_telepon') ?: Auth::user()->no_telepon }}" required>
                            </div>
                            @if ($errors->has('no_telepon'))
                            <div class=" text-center" role="alert">
                            <p  class="text-danger">{{ $errors->first('no_telepon') }}</p>
                          </div>
                            @endif
                            <div class="mb-4">
                                <label class="form-label">Alamat</label>
                                <input type="text" name="alamat" class="form-control  {{ $errors->has('alamat') ? 'is-invalid' : '' }}" value="{{old('alamat') ?: Auth::user()->alamat }}" required>
                            </div>
                            @if ($errors->has('alamat'))
                            <div class=" text-center" role="alert">
                            <p  class="text-danger">{{ $errors->first('alamat') }}</p>
                          </div>
                            @endif
                              
                                     
                                     
                                  </div>
                              </div>
                              <button type="submit" class="w-100 btn btn-primary">Bayar Sekarang</button>
                              <p class="text-center subheader mt-4">
                                  <img src="{{ asset('/images/ic_secure.svg') }}" alt=""> Pembayaran anda aman dan terenkripsi.
                              </p>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
@endsection