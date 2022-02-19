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
                              <img src="{{ asset('/images/item_bootcamp.png') }}" alt="" class="cover">
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
                                  <label class="form-label">Nomor Kartu</label>
                                  <input type="number" name="nomor_kartu" class="form-control  {{ $errors->has('nomor_kartu') ? 'is-invalid' : '' }}" value="{{old('nomor_kartu') ?: Auth::user()->nomor_kartu }}" required>
                              </div>
                              @if ($errors->has('nomor_kartu'))
                              <div class=" text-center" role="alert">
                              <p  class="text-danger">{{ $errors->first('nomor_kartu') }}</p>
                            </div>
                              @endif
                              <div class="mb-5">
                                  <div class="row">
                                      <div class="col-lg-6 col-12">
                                          <label class="form-label">Kadaluwarsa</label>
                                          <input type="month" name="kadaluwarsa" class="form-control {{ $errors->has('kadaluwarsa') ? 'is-invalid' : '' }}" value="{{old('kadaluwarsa') ?: Auth::user()->kadaluwarsa }}" required>
                                          @if ($errors->has('kadaluwarsa'))
                                          <p  class="text-danger ">{{ $errors->first('kadaluwarsa') }}</p>
                                          @endif
                                      </div>
                                      <div class="col-lg-6 col-12">
                                          <label class="form-label">Kode CVC</label>
                                          <input type="number" maxlength="3" name="cvc" class="form-control  {{ $errors->has('cvc') ? 'is-invalid' : '' }}" required>
                                          @if ($errors->has('cvc'))
                                          <p  class="text-danger">{{ $errors->first('cvc') }}</p>
                                          @endif
                                      </div>
                                     
                                     
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