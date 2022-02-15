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
                              <h1 class="package text-red">
                                  GILA BELAJAR
                              </h1>
                              <p class="description">
                                  Kami akan membuatkan sebuah website impian sesuai keperluan anda, tidak perlu pusing untuk hiring web developer.
                              </p>
                          </div>
                      </div>
                      <div class="col-lg-1 col-12"></div>
                      <div class="col-lg-6 col-12">
                          <form action="{{ route('success-checkout') }}" class="basic-form">
                              <div class="mb-4">
                                  <label for="exampleInputEmail1" class="form-label">Full Name</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                              <div class="mb-4">
                                  <label for="exampleInputEmail1" class="form-label">Email Address</label>
                                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                              <div class="mb-4">
                                  <label for="exampleInputEmail1" class="form-label">Occupation</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                              <div class="mb-4">
                                  <label for="exampleInputEmail1" class="form-label">Card Number</label>
                                  <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                              <div class="mb-5">
                                  <div class="row">
                                      <div class="col-lg-6 col-12">
                                          <label for="exampleInputEmail1" class="form-label">Expired</label>
                                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                      </div>
                                      <div class="col-lg-6 col-12">
                                          <label for="exampleInputEmail1" class="form-label">CVC</label>
                                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                      </div>
                                  </div>
                              </div>
                              <button type="submit" class="w-100 btn btn-primary">Pay Now</button>
                              <p class="text-center subheader mt-4">
                                  <img src="/assets/images/ic_secure.svg" alt=""> Your payment is secure and encrypted.
                              </p>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
@endsection