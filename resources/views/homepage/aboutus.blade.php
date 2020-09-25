@extends('welcome')
@section('titlepage','Tentang Kami | belanjasemua.com')
<?php $y = Date('Y'); ?>
@section('deschomepage','Bagaimana kami memulai usaha dan bisnis panen di Indonesia terkhusus di Medan dan di Jakarta.
Kami Musim Panen.')
@section('content')
<section id="page-title" class="page-title-parallax page-title-dark include-header"
    style="padding: 350px 0; background-image: url('{!!asset('homepage/images/home/about.jpg')!!}'); background-size: cover; background-position: center center;"
    data-bottom-top="background-position:0px 400px;" data-top-bottom="background-position:0px -500px;">

    <div class="container clearfix">
        <h1>belanjasemua.com:<br> jasa beli barang bebas<br>profesional pertama<br>di Indonesia.</h1>
        <h4>
            belanjasemua.com adalah layanan jasa beli dengan cara mudah <br> dengan harga yang sebenarnya dan harga
            jasa
            yang
            terjangkau, <br>pemrosesan jauh lebih mudah, cepat dan aman. </h4>
    </div>
</section>
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="row col-mb-50 mb-0">
                <div class="col-lg-12 text-center">
                    <h1>kenapa harus belanja di <span>belanjasemua.com</span>?</h1>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-sm-6 col-lg-3 text-center" data-animate="bounceIn">
                    <i class="i-plain i-large mx-auto icon-line2-plane" style="color:#1d6ec1;"></i>
                    <div class="counter counter-lined">Pengiriman Cepat</div>
                </div>
                <div class="col-sm-6 col-lg-3 text-center" data-animate="bounceIn" data-delay="200">
                    <i class="i-plain i-large mx-auto mb-0 icon-line2-lock" style="color:#1d6ec1;"></i>
                    <div class="counter counter-lined" style="margin-top: 6px;">Transparan & Aman</div>

                </div>

                <div class="col-sm-6 col-lg-3 text-center" data-animate="bounceIn" data-delay="400">
                    <i class="i-plain i-large mx-auto mb-0 icon-line2-check" style="color:#1d6ec1;"></i>
                    <div class="counter counter-lined" style="margin-top: 6px;">Resmi & Terjamin</div>

                </div>

                <div class="col-sm-6 col-lg-3 text-center" data-animate="bounceIn" data-delay="600">
                    <i class="i-plain i-large mx-auto mb-0 icon-line2-cup" style="color:#1d6ec1;"></i>
                    <div class="counter counter-lined" style="margin-top: 6px;">Harga Terbaik</div>

                </div>

            </div>
        </div>
    </div>
</section>
<section id="content">
    <div class="section border-top-0 m-0 ekspedisi" style="">
        <div class="container clearfix">
            <div class="row col-mb-50">
                <div class="col-md-7 text-center text-md-left">
                    <div class="heading-block topmargin-sm">
                        <h2>pengiriman cepat, aman dan <br>terpercaya dengan partner <br><span>ekspedisi DHL
                                International</span>
                        </h2>
                    </div>

                    <p></p>
                </div>
            </div>

        </div>
    </div>
    <div class="section border-top-0 m-0">
        <div class="container clearfix">
            <div class="row">
                <div class="col-md-5 d-flex align-items-center" style="min-height: 350px">
                    <img src="{!!asset('homepage/images/home/about-pengiriman.png')!!}" alt="">
                </div>
                <div class="col-md-7 text-center text-md-left" style="margin-top: 120px;">
                    <div class="heading-block topmargin-sm">
                        <h2>biaya pengiriman dari luar negeri <br><span>bisa dinegosiasi & lebih murah 10%</span>
                        </h2>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="section border-top-0 m-0">
        <div class="container clearfix">
            <div class="row">
                <div class="col-md-7 text-center text-md-left" style="margin-top: 120px;">
                    <div class="heading-block topmargin-sm">
                        <h2>transparan untuk semua <br><span>biaya pajak, bea masuk, dan <br>pengurusan dokumen</span>
                        </h2>
                    </div>
                </div>
                <div class="col-md-5 d-flex align-items-center" style="min-height: 350px">
                    <img src="{!!asset('homepage/images/home/about-transparan.png')!!}" alt="">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-6">
                    <a href="/" class="button button-xlarge button-circle button-blue">mulai belanja sekarang</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
