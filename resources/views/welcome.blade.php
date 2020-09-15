<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Bintang Tobing" />
    <meta name="description" content="@yield('deschomepage')">
    <meta name="keywords" content="belanjasemua, belanja semua,">
    <link rel="shortcut icon" href="{!!asset('auth/images/favicon.ico')!!}" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('titlepage')</title>

    <script src="https://kit.fontawesome.com/bf3b9c3659.js" crossorigin="anonymous"></script>

    <!-- Stylesheets
	============================================= -->
    <link
        href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap"
        rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="{!!asset('homepage/belanjasemua/travel.css')!!}" type="text/css" />
    <link rel="stylesheet" href="{!!asset('homepage/css/components/datepicker.css')!!}" type="text/css" />

    <link rel="stylesheet" href="{!!asset('homepage/css/bootstrap.css')!!}" type="text/css" />
    <link rel="stylesheet" href="{!!asset('homepage/style.css')!!}" type="text/css" />

    <link rel="stylesheet" href="{!!asset('homepage/css/dark.css')!!}" type="text/css" />
    <link rel="stylesheet" href="{!!asset('homepage/css/font-icons.css')!!}" type="text/css" />
    <link rel="stylesheet" href="{!!asset('homepage/css/animate.css')!!}" type="text/css" />
    <link rel="stylesheet" href="{!!asset('homepage/css/magnific-popup.css')!!}" type="text/css" />

    <link rel="stylesheet" href="{!!asset('homepage/css/custom.css')!!}" type="text/css" />
    <link rel="stylesheet" href="{!!asset('homepage/css/colors.php?color=1d6ec1')!!}" type="text/css" />


    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "WebSite",
            "name": "Musim Panen",
            "url": "https://putrakaryalogamsukses.com/about-us",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "https://putrakaryalogamsukses.com/{search_term_string}",
                "query-input": "required name=search_term_string"
            }
        }

    </script>

    {{-- METAGRAPH FACEBOOK --}}
    <meta property="fb:admins" content="593740541289378">
    <meta property="og:site_name" content="@yield('title')" />
    <meta property="og:url" content="{{Request::url()}}" />
    <meta property="og:type" content="@yield('ogtype')" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('deschomepage')" />
    <meta property="og:image"
        content="{!!url('https://res.cloudinary.com/sarjanamalam/image/upload/v1596438013/fbimg_vsmk7u.jpg')!!}')!!}">

    <!--GTAG JS-->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-68593210-14"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-68593210-14');

    </script> --}}
</head>

<body class="stretched">
    <div id="wrapper" class="clearfix">
        <!-- Header
		============================================= -->
        <header id="header" class="not-dark" data-sticky-class="not-dark" data-responsive-class="not-dark"
            data-menu-padding="28">
            <div id="header-wrap">
                <div class="container">
                    <div class="header-row">

                        <!-- Logo
						============================================= -->
                        <div id="logo">
                            <a href="/" class="standard-logo"
                                data-dark-logo="{!!asset('homepage/images/logo-web.png')!!}"><img
                                    src="{!!asset('homepage/images/logo-web.png')!!}" alt="belanjasemua.com Logo"></a>
                            <a href="/" class="retina-logo"
                                data-dark-logo="{!!asset('homepage/images/logo-web.png')!!}"><img
                                    src="{!!asset('homepage/images/logo-web.png')!!}" alt="belanjasemua.com Logo"></a>
                        </div><!-- #logo end -->

                        <div id="primary-menu-trigger">
                            <svg class="svg-trigger" viewBox="0 0 100 100">
                                <path
                                    d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20">
                                </path>
                                <path d="m 30,50 h 40"></path>
                                <path
                                    d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20">
                                </path>
                            </svg>
                        </div>

                        <!-- Primary Navigation
						============================================= -->
                        <nav class="primary-menu style-4 menu-spacing-margin">

                            <ul class="menu-container">
                                <li class="menu-item @yield('activemenu')"><a class="menu-link" href="/tentang-kami">
                                        <div>tentang kami</div>
                                    </a></li>
                                <li class="menu-item @yield('activemenu')"><a class="menu-link" href="/faqs">
                                        <div>bantuan</div>
                                    </a></li>
                                <li class="menu-item @yield('activemenu')"><a class="menu-link" href="/hubungi-kami">
                                        <div>hubungi kami</div>
                                    </a></li>
                            </ul>

                        </nav><!-- #primary-menu end -->

                    </div>
                </div>
            </div>
            <div class="header-wrap-clone"></div>
        </header>
        @yield('content') <footer id="footer" class="dark" style="background-color: #1d6ec1;">
            <div class="container">

                <!-- Footer Widgets
				============================================= -->
                <div class="footer-widgets-wrap">

                    <div class="row col-mb-50">
                        <div class="col-md-12">

                            <div class="widget clearfix">

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="footer-big-contacts">
                                            <img class="imgfoot" src="{!!asset('homepage/images/whitelogo.png')!!}"
                                                alt="">
                                        </div>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-9 menufoot text-left">
                                        <ul>
                                            <li><a href="/tentang-kami">tentang kami</a></li>
                                            <li><a href="/faqs">FaQs / bantuan</a></li>
                                            <li><a href="/hubungi-kami">hubungi kami</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3 float-right">
                                        <a href="#" class="social-icon si-light si-rounded si-facebook">
                                            <i class="icon-facebook"></i>
                                            <i class="icon-facebook"></i>
                                        </a>
                                        <a href="#" class="social-icon si-light si-rounded si-instagram">
                                            <i class="icon-instagram"></i>
                                            <i class="icon-instagram"></i>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div><!-- .footer-widgets-wrap end -->

            </div>

            <!-- Copyrights
			============================================= -->
            <div id="copyrights">
                <div class="container">

                    <div class="row col-mb-30">
                        <?php $y = Date('Y'); ?>
                        <div class="col-md-6 text-center text-md-left">
                            &copy; {{$y}} PT Belanja Semua Indonesia. All rights reserved.<br>
                        </div>

                        <div class="col-md-6 text-center text-md-right">
                            <div class="clear"></div>
                            <div class="copyright-links"><a href="#">Kebijakan Privasi</a> / <a href="#">Syarat
                                    Penggunaan</a>
                            </div>
                        </div>

                    </div>

                </div>
            </div><!-- #copyrights end -->
        </footer><!-- #footer end -->

    </div>

    <!-- Go To Top
	============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- JavaScripts
	============================================= -->
    <script src="{!!asset('homepage/js/jquery.js')!!}"></script>
    <script src="{!!asset('homepage/js/plugins.min.js')!!}"> </script>
    <!-- Footer
        Scripts=============================================-->
    <script src="{!!asset('homepage/js/functions.js')!!}">
    </script>

    <script src="https://maps.google.com/maps/api/js?key=AIzaSyBPHBkHbxlsp255-WwFSBcj4Eq3WUovF00"></script>

    {{-- JS Untuk harga --}}
    <script type="text/javascript">
        var rupiah = document.getElementById('rupiah');
        rupiah.addEventListener('keyup', function (e) {
            // tambahkan 'Rp.' pada saat form di ketik
            // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
            rupiah.value = formatRupiah(this.value, 'Rp. ');
        });

        /* Fungsi formatRupiah */
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            // tambahkan titik jika yang di input sudah menjadi angka ribuan
            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }

    </script>
    <script type="text/javascript">
        
    </script>
</body>

</html>
