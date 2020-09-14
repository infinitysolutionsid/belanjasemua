@extends('welcome')
@section('titlepage','belanjasemua.com - Mau beli barang dengan harga asli? Dengan harga jasa penawaran rendah?')
<?php $y = Date('Y'); ?>
@section('deschomepage','')
@section('content')
<section id="slider"
    class="slider-element slider-parallax swiper_wrapper min-vh-60 min-vh-md-100 include-header include-topbar">
    <div class="slider-inner">

        <div class="fslider h-100 position-absolute" data-speed="3000" data-pause="7500" data-animation="fade"
            data-arrows="false" data-pagi="false" style="background-color: #333;">
            <div class="flexslider">
                <div class="slider-wrap">
                    <div class="slide"
                        style="background: url('{!!asset('homepage/images/home/1.jpg')!!}') center center; background-size: cover;">
                    </div>
                    <div class="slide"
                        style="background: url('{!!asset('homepage/images/home/2.jpg')!!}') center center; background-size: cover;">
                    </div>
                    <div class="slide"
                        style="background: url('{!!asset('homepage/images/home/3.jpg')!!}') center center; background-size: cover;">
                    </div>
                </div>
            </div>
        </div>

        <div id="travel-slider-overlay">
            <div class="vertical-middle">
                <div class="container py-5 pt-5 pb-lg-0">
                    <div class="tabs travel-organiser-tabs mt-lg-5">
                        <ul class="tab-nav">
                            <li><a href="#tab-order"><i class="icon-cart"></i><span class="d-none d-md-inline-block">Yok
                                        belanja semua!</span></a></li>
                        </ul>

                        <div class="tab-container">
                            <div class="tab-content" id="tab-order">
                                <div class="heading-block border-bottom-0 bottommargin-sm d-flex flex-column flex-md-row justify-content-between align-items-center"
                                    style="margin-top: 0 !important;">
                                    <h4>Mau belanja apa nih sob?</h4>
                                </div>
                                <form action="#" method="post" class="mb-0">
                                    <div class="row">
                                        <div class="col-md-6 col-12 bottommargin-sm">
                                            <label>Pesanan</label>
                                            <input type="text" name="produk_name" value="" class="sm-form-control my-2"
                                                placeholder="Produk atau URL Produk" required>
                                            <input type="text" name="harga_kisaran" value=""
                                                class="sm-form-control my-2" placeholder="Kisaran harga per unit"
                                                required>
                                            <input type="text" name="notes" value="" class="sm-form-control my-2"
                                                placeholder="Catatan (warna, ukuran, tipe)" required>
                                        </div>
                                        <div class="col-md-6 col-12 bottommargin-sm">
                                            <label>Informasi Data Pribadi</label>
                                            <input type="text" name="contact_name" value="" class="sm-form-control my-2"
                                                placeholder="Nama Lengkap" required>
                                            <input type="email" name="Email" value="" class="sm-form-control my-2"
                                                placeholder="Email" required>
                                            <input type="tel" name="notes" value="" class="sm-form-control my-2"
                                                placeholder="Nomor HP" required>
                                        </div>
                                        <div class="input-daterange travel-date-group col-md-9 bottommargin-sm">
                                            <div class="row">
                                                <div class="col-md-12 col-6">
                                                    <label>Durasi Pengiriman</label>
                                                    <div>
                                                        <input id="radio-4" class="radio-style" name="durasi_pengiriman"
                                                            type="radio" checked>
                                                        <label for="radio-4" class="radio-style-1-label">Express</label>
                                                    </div>
                                                    <div>
                                                        <input id="radio-5" class="radio-style" name="durasi_pengiriman"
                                                            type="radio">
                                                        <label for="radio-5" class="radio-style-1-label">Regular</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="col-md-12 d-flex flex-column flex-md-row justify-content-between align-items-center">
                                            <button type="submit" class="button button-3d m-0 rightmargin-sm">mulai
                                                belanja</button>
                                        </div>
                                    </div>
                                </form>
                            </div>


                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>
<section id="content">
    <div class="content-wrap">
        <div class="section bottommargin-lg header-stick" style="margin-bottom: 0px !important;">
            <div class="container">
                <div class="row col-mb-30 mb-0">
                    <div class="col-sm-6 col-lg-4 text-center text-sm-left">
                        <div class="heading-block border-bottom-0 mb-0" style="margin-top: 0 !important;">
                            <span class="before-heading">Mengapa harus belanja di</span>
                            <h4><span>belanjasemua.com</span>?</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-2 text-center text-sm-left">
                        <i class="i-plain color i-big icon-line2-plane"></i>
                        <div class="border-bottom-0 mb-0">
                            <h4>Cepat</h4>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-2 text-center text-sm-left">
                        <i class="i-plain color i-big icon-line2-lock"></i>
                        <div class="border-bottom-0 mb-0">
                            <h4>Transparan & Aman</h4>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-2 text-center text-sm-left">
                        <i class="i-plain color i-big icon-line2-check"></i>
                        <div class="border-bottom-0 mb-0">
                            <h4>Resmi & Terjamin</h4>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-2 text-center text-sm-left">
                        <i class="i-plain color i-big icon-line2-cup"></i>
                        <div class="border-bottom-0 mb-0">
                            <h4>Harga Terbaik</h4>
                        </div>
                    </div>

                </div>

            </div>

        </div>


    </div>
</section>
@endsection
