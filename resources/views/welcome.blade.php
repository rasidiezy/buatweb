@extends('layouts.app')

@section('content')
<section class="banner">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11 col-12">
                <div class="row">
                    <div class="col-lg-6 col-12 copywriting">
                        <p class="story">
                            BERPENGALAMAN LEBIH DARI 3 TAHUN
                        </p>
                        <h1 class="header">
                            Bangun <span class="text-red">Website <br> Impian</span> Bersama Kami
                        </h1>
                        <p class="support">
                            Sebuah program yang membantu anda untuk membuat <br> website impian anda.
                        </p>
                     
                        <p class="cta">
                            <a href="#" class="btn btn-master btn-primary">
                               Mulai Sekarang
                            </a>
                        </p>
                    </div>
                    <div class="col-lg-6 col-12 text-center">
                        <a href="#">
                            <img src="{{ asset('/images/banner.png') }}" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
</section>

<section class="benefits">
    <div class="container">
        <div class="row text-center pb-70">
            <div class="col-lg-12 col-12 header-wrap">
                <p class="story">
                    KEUNGGULAN KAMI
                </p>
                <h2 class="primary-header">
                    Bangun Website Cepat dan Aman
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-12">
                <div class="item-benefit">
                    <img src="{{ asset('/images/ic-321.png') }}" class="icon" alt="">
                    <h3 class="title">
                        Modern
                    </h3>
                    <p class="support">
                       Website anda dijamin modern  <br> dan terlihat keren
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="item-benefit">
                    <img src="{{ asset('/images/ic-123.png') }}" class="icon" alt="">
                    <h3 class="title">
                        Keamanan
                    </h3>
                    <p class="support">
                        Website yang bagus juga harus <br> menjamin keamanan data
                    </p>
                
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="item-benefit">
                    <img src="{{ asset('/images/ic_globe-2.png') }}" class="icon" alt="">
                    <h3 class="title">
                        Diskusi
                    </h3>
                    <p class="support">
                        Kami akan membantu diskusi <br> alur website yang diinginkan
                    </p>
                
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="item-benefit">
                    <img src="{{ asset('/images/ic_globe123.png') }}" class="icon" alt="">
                    <h3 class="title">
                        Hosting
                    </h3>
                    <p class="support">
                        Gratis hosting 1 tahun untuk <br>  website anda
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="steps">
    <div class="container">
        <div class="row item-step pb-70">
            <div class="col-lg-6 col-12 text-center">
                <img src="{{ asset('/images/step1.png') }}" class="cover" alt="">
            </div>
            <div class="col-lg-6 col-12 text-left copywriting">
                <p class="story">
                    TAHAP PERTAMA   
                </p>
                <h2 class="primary-header">
                    Diskusi Sebelum Pembuatan
                </h2>
                <p class="support">
                   Disini kita berdiskusi tentang <br> website yang anda inginkan dan perlukan
                </p>
                <p class="mt-5">
                    <a href="#" class="btn btn-master text-red btn-secondary me-3">
                        Selengkapnya
                    </a>
                </p>
            </div>
        </div>
        <div class="row item-step pb-70">
            <div class="col-lg-6 col-12 text-left copywriting pl-150">
                <p class="story">
                   TAHAP KEDUA
                </p>
                <h2 class="primary-header">
                    Pembuatan Website
                </h2>
                <p class="support">
                   Di tahap ini kami akan membuatkan website <br> sesuai dengan deadline waktu yang kami tetapkan
                </p>
                <p class="mt-5">
                    <a href="#" class="btn btn-master text-red btn-secondary me-3">
                        Selengkapnya
                    </a>
                </p>
            </div>
            <div class="col-lg-6 col-12 text-center">
                <img src="{{asset('images/step2.png')}}" class="cover" alt="">
            </div>

        </div>
        <div class="row item-step">
            <div class="col-lg-6 col-12 text-center">
                <img src="{{ asset('/images/step3.png') }}" class="cover" alt="">
            </div>
            <div class="col-lg-6 col-12 text-left copywriting">
                <p class="story">
                   TAHAP TERAKHIR
                </p>
                <h2 class="primary-header">
                   Demo Website
                </h2>
                <p class="support">
                   Kami akan memberikan demo website dan melakukan <br> penyerahan website yang sudah di hosting untuk anda.
                </p>
                <p class="mt-5">
                    <a href="#" class="btn btn-master text-red btn-secondary me-3">
                        Lihat Demo
                    </a>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="pricing">
    <div class="container">
        <div class="row pb-70">
            <div class="col-lg-5 col-12 header-wrap copywriting">
                <p class="support">
                    INVESTASI MENGUNTUNGKAN
                </p>
                <h2 class="primary-header text-white">
                   Bangun Website Anda
                </h2>
                <p class="support">
                   Jangan tunggu nanti miliki segera sebuah website <br> untuk keperluan portfolio ataupun perusahaan anda
                </p>
                
            </div>
            <div class="col-lg-7 col-12">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="table-pricing paket-gila">
                            <p class="story text-center">
                                PAKET MAKSIMAL
                            </p>
                            <h1 class="price text-center">
                                2.900.000
                            </h1>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                <p>
                                    Teknologi Terbaru
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                <p>
                                    Desain Premium
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                <p>
                                    Keamanan Data Website
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                <p>
                                    Gratis Hosting 1 Tahun
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                <p>
                                    Gratis Revisi 5 kali
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                <p>
                                    Pemeliharaan Website
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
       
                            <p>
                                <a href="{{ route('checkouts') }}" class="btn btn-master btn-primary w-100 mt-3">
                                    Take This Plan
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="table-pricing paket-biasa">
                            <p class="story text-center">
                                PAKET STANDAR
                            </p>
                            <h1 class="price text-center">
                                1.800.000
                            </h1>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                <p>
                                   Teknologi Terbaru
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                <p>
                                   Desain Premium
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{ asset('/images/ic_check.svg') }}" alt="">
                                <p>
                                    Keamanan Data Website
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
              
                            <p>
                                <a href="{{ route('checkouts') }}" class=" text-red btn btn-master btn-secondary w-100 mt-3">
                                    Start With This Plan
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>

<section class="testimonials">
    <div class="container">
        <div class="row text-center pb-70">
            <div class="col-lg-12 col-12 header-wrap">
                <p class="story">
                    TESTIMONI KAMI
                </p>
                <h2 class="primary-header">
                   Kami sangat menyukai buatweb
                </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12">
                <div class="row">
                    <div class="col-lg-4 col-12">
                        <div class="item-review">
                            <img src="{{ asset('/images/stars.svg') }}" alt="">
                            <p class="message">
                                Saya sangat kagum dengan website perusahaan kami yang dihasilkan oleh <b> buatweb.com </b>
                         
                            <div class="user">
                                <img src="{{ asset('/images/rasidi.png') }}" class="photo" alt="">
                                <div class="info">
                                    <h4 class="name">
                                        Rasidi
                                    </h4>
                                    <p class="role">
                                        CEO di Google
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="item-review">
                            <img src="{{ asset ('/images/stars.svg') }}" alt="">
                            <p class="message">
                               Kami berhasil meningkatkan penjualan online setelah dibuatkan website keren oleh <b> buatweb.com </b>
                            </p>
                            <div class="user">
                                <img src="{{ asset('images/angga.png') }}" class="photo" alt="">
                                <div class="info">
                                    <h4 class="name">
                                       Rizali
                                    </h4>
                                    <p class="role">
                                        CEO at BWA Corp
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="item-review">
                            <img src="{{ asset('/images/stars.svg') }}" alt="">
                            <p class="message">
                               <b>buatweb.com</b>  sangat totalitas dalam hal pembuatan website portfolio saya sebagai perawat
                            </p>
                            <div class="user">
                                <img src="{{ asset('/images/beatrice.png') }}" class="photo" alt="">
                                <div class="info">
                                    <h4 class="name">
                                        Lastri Ayu
                                    </h4>
                                    <p class="role">
                                        Perawat
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row copyright">
                    <div class="col-lg-12 col-12">
                        <p>
                            All Rights Reserved. Copyright by Rasidi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection