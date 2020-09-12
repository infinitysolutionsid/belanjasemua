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

        <!-- Top Bar
		============================================= -->
        <div id="top-bar" class="transparent-topbar dark">
            <div class="container">

                <div class="row justify-content-between">
                    <div class="col-12 col-md-auto">

                        <!-- Top Links
						============================================= -->
                        <div class="top-links">
                            <ul class="top-links-container">
                                <li class="top-links-item"><a href="demo-travel.html">Home</a></li>
                                <li class="top-links-item"><a href="faqs.html">FAQs</a></li>
                                <li class="top-links-item"><a href="contact.html">Contact</a></li>
                                <li class="top-links-item"><a href="#">USD</a>
                                    <ul class="top-links-sub-menu">
                                        <li class="top-links-item"><a href="#">EUR</a></li>
                                        <li class="top-links-item"><a href="#">AUD</a></li>
                                        <li class="top-links-item"><a href="#">GBP</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div><!-- .top-links end -->

                    </div>

                    <div class="col-12 col-md-auto">

                        <!-- Top Social
						============================================= -->
                        <ul id="top-social">
                            <li><a href="#" class="si-facebook"><span class="ts-icon"><i
                                            class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a>
                            </li>
                            <li><a href="#" class="si-twitter"><span class="ts-icon"><i
                                            class="icon-twitter"></i></span><span class="ts-text">Twitter</span></a>
                            </li>
                            <li><a href="#" class="si-pinterest"><span class="ts-icon"><i
                                            class="icon-pinterest"></i></span><span class="ts-text">Pinterest</span></a>
                            </li>
                            <li><a href="#" class="si-instagram"><span class="ts-icon"><i
                                            class="icon-instagram2"></i></span><span
                                        class="ts-text">Instagram</span></a></li>
                            <li><a href="tel:+1.11.85412542" class="si-call"><span class="ts-icon"><i
                                            class="icon-call"></i></span><span class="ts-text">+1.11.85412542</span></a>
                            </li>
                            <li><a href="mailto:info@canvas.com" class="si-email3"><span class="ts-icon"><i
                                            class="icon-envelope-alt"></i></span><span
                                        class="ts-text">info@canvas.com</span></a></li>
                        </ul><!-- #top-social end -->

                    </div>
                </div>

            </div>
        </div><!-- #top-bar end -->

        <!-- Header
		============================================= -->
        <header id="header" class="transparent-header dark" data-sticky-class="not-dark"
            data-responsive-class="not-dark" data-menu-padding="28">
            <div id="header-wrap">
                <div class="container">
                    <div class="header-row">

                        <!-- Logo
						============================================= -->
                        <div id="logo">
                            <a href="demo-travel.html" class="standard-logo" data-dark-logo="images/logo-dark.png"><img
                                    src="images/logo.png" alt="Canvas Logo"></a>
                            <a href="demo-travel.html" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img
                                    src="images/logo@2x.png" alt="Canvas Logo"></a>
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
                                <li class="menu-item current"><a class="menu-link" href="demo-travel.html">
                                        <div><i class="icon-home2"></i>Home</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="#">
                                        <div><i class="icon-plane"></i>Flights</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="demo-travel-hotels.html">
                                        <div><i class="icon-building"></i>Hotels</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="demo-travel-holidays.html">
                                        <div><i class="icon-gift"></i>Holidays</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="demo-travel-blog.html">
                                        <div><i class="icon-pencil2"></i>Blog</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="#">
                                        <div><i class="icon-phone3"></i>1800 105 2541</div>
                                    </a></li>
                            </ul>

                        </nav><!-- #primary-menu end -->

                    </div>
                </div>
            </div>
            <div class="header-wrap-clone"></div>
        </header><!-- #header end -->

        <section id="slider"
            class="slider-element slider-parallax swiper_wrapper min-vh-60 min-vh-md-100 include-header include-topbar">
            <div class="slider-inner">

                <div class="fslider h-100 position-absolute" data-speed="3000" data-pause="7500" data-animation="fade"
                    data-arrows="false" data-pagi="false" style="background-color: #333;">
                    <div class="flexslider">
                        <div class="slider-wrap">
                            <div class="slide"
                                style="background: url('demos/travel/images/slider/1.jpg') center center; background-size: cover;">
                            </div>
                            <div class="slide"
                                style="background: url('demos/travel/images/slider/2.jpg') center center; background-size: cover;">
                            </div>
                            <div class="slide"
                                style="background: url('demos/travel/images/slider/3.jpg') center center; background-size: cover;">
                            </div>
                        </div>
                    </div>
                </div>

                <div id="travel-slider-overlay">

                    <div class="vertical-middle">
                        <div class="container py-5 pt-5 pb-lg-0">

                            <div class="tabs travel-organiser-tabs mt-lg-5">
                                <ul class="tab-nav">
                                    <li><a href="#tab-flights"><i class="icon-plane"></i><span
                                                class="d-none d-md-inline-block">Flights</span></a></li>
                                    <li><a href="#tab-hotels"><i class="icon-building"></i><span
                                                class="d-none d-md-inline-block">Hotels</span></a></li>
                                    <li><a href="#tab-flights-hotels"><span class="d-block d-md-none"><i
                                                    class="icon-plane"></i> + <i class="icon-building"></i></span><span
                                                class="d-none d-md-inline-block">Flights + Hotels <span
                                                    class="badge badge-danger">Save</span></span></a></li>
                                    <li><a href="#tab-holidays"><i class="icon-gift"></i><span
                                                class="d-none d-md-inline-block">Holidays</span></a></li>
                                </ul>

                                <div class="tab-container">
                                    <div class="tab-content" id="tab-flights">
                                        <div
                                            class="heading-block border-bottom-0 bottommargin-sm d-flex flex-column flex-md-row justify-content-between align-items-center">
                                            <h4>Book your Flights</h4>
                                            <div class="btn-group">
                                                <button type="button"
                                                    class="btn btn-danger btn-sm bg-color border-color">Domestic</button>
                                                <button type="button"
                                                    class="btn btn-secondary btn-sm">International</button>
                                            </div>
                                        </div>
                                        <form action="#" method="post" class="mb-0">
                                            <div class="row">
                                                <div class="col-md-6 col-12 bottommargin-sm">
                                                    <label>From</label>
                                                    <input type="text" value="" class="sm-form-control"
                                                        placeholder="Eg. Melbourne, Australia">
                                                </div>
                                                <div class="col-md-6 col-12 bottommargin-sm">
                                                    <label>To</label>
                                                    <input type="text" value="" class="sm-form-control"
                                                        placeholder="Eg. New York, United States">
                                                </div>
                                                <div class="input-daterange travel-date-group col-md-9 bottommargin-sm">
                                                    <div class="row">
                                                        <div class="col-md-6 col-6">
                                                            <label>Departure</label>
                                                            <input type="text" value=""
                                                                class="sm-form-control text-left" name="start"
                                                                placeholder="MM/DD/YYYY">
                                                        </div>
                                                        <div class="col-md-6 col-6">
                                                            <label>Return</label>
                                                            <input type="text" value=""
                                                                class="sm-form-control text-left" name="end"
                                                                placeholder="MM/DD/YYYY">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 bottommargin-sm">
                                                    <label>Adults</label>
                                                    <input type="number" min="1" max="10" value=""
                                                        class="sm-form-control" name="end" placeholder="2">
                                                </div>
                                                <div
                                                    class="col-md-12 d-flex flex-column flex-md-row justify-content-between align-items-center">
                                                    <button class="button button-3d m-0 rightmargin-sm">Search
                                                        Flights</button>
                                                    <a href="#" class="more-link" style="margin-top: 9px;">Advanced
                                                        Search</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="tab-content" id="tab-hotels">
                                        <div
                                            class="heading-block border-bottom-0 bottommargin-sm d-flex flex-column flex-md-row justify-content-between align-items-center">
                                            <h4>Book your Hotels</h4>
                                            <div class="btn-group">
                                                <button type="button"
                                                    class="btn btn-danger btn-sm bg-color border-color">Domestic</button>
                                                <button type="button"
                                                    class="btn btn-secondary btn-sm">International</button>
                                            </div>
                                        </div>
                                        <form action="#" method="post" class="mb-0">
                                            <div class="row">
                                                <div class="col-md-12 bottommargin-sm">
                                                    <label>City</label>
                                                    <input type="text" value="" class="sm-form-control"
                                                        placeholder="Eg. Melbourne, Australia">
                                                </div>
                                                <div class="input-daterange travel-date-group col-md-9 bottommargin-sm">
                                                    <div class="row">
                                                        <div class="col-md-6 col-6">
                                                            <label>Departure</label>
                                                            <input type="text" value=""
                                                                class="sm-form-control text-left" name="start"
                                                                placeholder="MM/DD/YYYY">
                                                        </div>
                                                        <div class="col-md-6 col-6">
                                                            <label>Return</label>
                                                            <input type="text" value=""
                                                                class="sm-form-control text-left" name="end"
                                                                placeholder="MM/DD/YYYY">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 bottommargin-sm">
                                                    <label>Rooms</label>
                                                    <input type="number" min="1" max="10" value=""
                                                        class="sm-form-control" name="end" placeholder="2">
                                                </div>
                                                <div
                                                    class="col-md-12 d-flex flex-column flex-md-row justify-content-between align-items-center">
                                                    <button class="button button-3d m-0 rightmargin-sm">Search
                                                        Hotels</button>
                                                    <a href="#" class="more-link" style="margin-top: 9px;">Popular
                                                        Hotels</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="tab-content" id="tab-flights-hotels">
                                        <div
                                            class="heading-block border-bottom-0 bottommargin-sm d-flex flex-column flex-md-row justify-content-between align-items-center">
                                            <h4>Book Flights &amp; Hotels</h4>
                                            <div class="btn-group">
                                                <button type="button"
                                                    class="btn btn-danger btn-sm bg-color border-color">Domestic</button>
                                                <button type="button"
                                                    class="btn btn-secondary btn-sm">International</button>
                                            </div>
                                        </div>
                                        <form action="#" method="post" class="mb-0">
                                            <div class="row">
                                                <div class="col-md-9 bottommargin-sm">
                                                    <div class="row">
                                                        <div class="col-md-6 col-6">
                                                            <label>From</label>
                                                            <input type="text" value="" class="sm-form-control"
                                                                placeholder="Eg. Melbourne, Australia">
                                                        </div>
                                                        <div class="col-md-6 col-6">
                                                            <label>Destination</label>
                                                            <input type="text" value="" class="sm-form-control"
                                                                placeholder="Eg. New York, United States">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 bottommargin-sm">
                                                    <label>Adults</label>
                                                    <input type="number" min="1" max="10" value=""
                                                        class="sm-form-control" name="end" placeholder="2">
                                                </div>
                                                <div class="input-daterange travel-date-group col-md-9 bottommargin-sm">
                                                    <div class="row">
                                                        <div class="col-md-6 col-6">
                                                            <label>Departure</label>
                                                            <input type="text" value=""
                                                                class="sm-form-control text-left" name="start"
                                                                placeholder="MM/DD/YYYY">
                                                        </div>
                                                        <div class="col-md-6 col-6">
                                                            <label>Return</label>
                                                            <input type="text" value=""
                                                                class="sm-form-control text-left" name="end"
                                                                placeholder="MM/DD/YYYY">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3  bottommargin-sm">
                                                    <label>Rooms</label>
                                                    <input type="number" min="1" max="10" value=""
                                                        class="sm-form-control" name="end" placeholder="2">
                                                </div>
                                                <div
                                                    class="col-md-12 d-flex flex-column flex-md-row justify-content-between align-items-center">
                                                    <button class="button button-3d m-0 rightmargin-sm">Search Flights +
                                                        Hotels</button>
                                                    <a href="#" class="more-link" style="margin-top: 9px;">Holiday
                                                        Packages</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="tab-content" id="tab-holidays">
                                        <div class="heading-block border-bottom-0 bottommargin-sm">
                                            <h4>Search for Holiday Packages</h4>
                                        </div>
                                        <form action="#" method="post" class="mb-0">
                                            <div class="row">
                                                <div class="col-md-6 col-12 bottommargin-sm">
                                                    <label>From</label>
                                                    <input type="text" value="" class="sm-form-control"
                                                        placeholder="Eg. Melbourne, Australia">
                                                </div>
                                                <div class="col-md-6 col-12 bottommargin-sm">
                                                    <label>Destination</label>
                                                    <input type="text" value="" class="sm-form-control"
                                                        placeholder="Eg. Europe">
                                                </div>
                                                <div class="w-100"></div>
                                                <div class="col-md-9 bottommargin-sm">
                                                    <div class="row">
                                                        <div class="col-md-6 col-6">
                                                            <label>Month</label>
                                                            <select name="month" class="sm-form-control">
                                                                <option value="">-- Select Month --</option>
                                                                <option value="November 2021">November 2021</option>
                                                                <option value="December 2021">December 2021</option>
                                                                <option value="January 2021">January 2021</option>
                                                                <option value="February 2021">February 2021</option>
                                                                <option value="March 2021">March 2021</option>
                                                                <option value="April 2021">April 2021</option>
                                                                <option value="May 2021">May 2021</option>
                                                                <option value="June 2021">June 2021</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 col-6">
                                                            <label>Budget</label>
                                                            <select name="budget" class="sm-form-control">
                                                                <option value="">-- Select Budget --</option>
                                                                <option value="November 2021">$99 to $199</option>
                                                                <option value="December 2021">$200 to $499</option>
                                                                <option value="January 2021">$500 to $999</option>
                                                                <option value="February 2021">$1000 to $1999</option>
                                                                <option value="March 2021">Above $2000</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 bottommargin-sm">
                                                    <label>Adults</label>
                                                    <input type="number" min="1" max="10" value=""
                                                        class="sm-form-control" name="end" placeholder="2">
                                                </div>
                                                <div
                                                    class="col-md-12 d-flex flex-column flex-md-row justify-content-between align-items-center">
                                                    <button class="button button-3d m-0 rightmargin-sm">Search
                                                        Flights</button>
                                                    <a href="#" class="more-link" style="margin-top: 9px;">Advanced
                                                        Search</a>
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

        <!-- Content
		============================================= -->
        <section id="content">
            <div class="content-wrap">

                <div class="section bottommargin-lg header-stick">
                    <div class="container">

                        <div class="row mt-4 col-mb-30 mb-0">

                            <div class="col-sm-6 col-lg-3 text-center text-sm-left">
                                <i class="i-plain color i-large icon-line2-plane inline-block"
                                    style="margin-bottom: 15px;"></i>
                                <div class="heading-block border-bottom-0 mb-0">
                                    <span class="before-heading">Easy &amp; Cheap.</span>
                                    <h4>Search Flights</h4>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3 text-center text-sm-left">
                                <i class="i-plain color i-large icon-line2-key inline-block"
                                    style="margin-bottom: 15px;"></i>
                                <div class="heading-block border-bottom-0 mb-0">
                                    <span class="before-heading">Over 15000+ Places.</span>
                                    <h4>Get Hotel Deals</h4>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3 text-center text-sm-left">
                                <i class="i-plain color i-large icon-line2-present inline-block"
                                    style="margin-bottom: 15px;"></i>
                                <div class="heading-block border-bottom-0 mb-0">
                                    <span class="before-heading">Explore Destinations.</span>
                                    <h4>Holiday Packages</h4>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3 text-center text-sm-left">
                                <i class="i-plain color i-large icon-line2-earphones-alt inline-block"
                                    style="margin-bottom: 15px;"></i>
                                <div class="heading-block border-bottom-0 mb-0">
                                    <span class="before-heading">24x7 Dedicated Helpline.</span>
                                    <h4>1800 105 2541</h4>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="container clearfix">

                    <div class="heading-block center border-bottom-0">
                        <span class="before-heading color">What are you in the Mood for.?</span>
                        <h2>Tailor made Packages for you</h2>
                    </div>

                </div>

                <div id="portfolio" class="portfolio row grid-container portfolio-overlay-open no-gutters">

                    <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-media pf-icons">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <a href="portfolio-single.html">
                                    <img src="demos/travel/images/packages/1.jpg" alt="Beach Activities">
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content dark flex-column">
                                            <div class="portfolio-desc py-0 text-center">
                                                <h3>Beach Activities</h3>
                                            </div>
                                        </div>
                                        <div class="bg-overlay-bg dark op-ts op-05" data-hover-animate="op-1"
                                            data-hover-animate-out="op-05"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </article>

                    <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-illustrations">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <a href="portfolio-single.html">
                                    <img src="demos/travel/images/packages/2.jpg" alt="Romantic Getaways">
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content dark flex-column">
                                            <div class="portfolio-desc py-0 text-center">
                                                <h3>Romantic Getaways</h3>
                                            </div>
                                        </div>
                                        <div class="bg-overlay-bg dark op-ts op-05" data-hover-animate="op-1"
                                            data-hover-animate-out="op-05"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </article>

                    <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-graphics pf-uielements">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="demos/travel/images/packages/3.jpg" alt="Mountain Madness">
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content dark flex-column">
                                            <div class="portfolio-desc py-0 text-center">
                                                <h3>Mountain Madness</h3>
                                            </div>
                                        </div>
                                        <div class="bg-overlay-bg dark op-ts op-05" data-hover-animate="op-1"
                                            data-hover-animate-out="op-05"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </article>

                    <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-icons pf-illustrations">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <a href="portfolio-single.html">
                                    <img src="demos/travel/images/packages/4.jpg" alt="Active Explorer">
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content dark flex-column">
                                            <div class="portfolio-desc py-0 text-center">
                                                <h3>Active Explorer</h3>
                                            </div>
                                        </div>
                                        <div class="bg-overlay-bg dark op-ts op-05" data-hover-animate="op-1"
                                            data-hover-animate-out="op-05"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </article>

                    <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-uielements pf-media">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <a href="portfolio-single.html">
                                    <img src="demos/travel/images/packages/5.jpg" alt="Icy Challenge">
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content dark flex-column">
                                            <div class="portfolio-desc py-0 text-center">
                                                <h3>Icy Challenge</h3>
                                            </div>
                                        </div>
                                        <div class="bg-overlay-bg dark op-ts op-05" data-hover-animate="op-1"
                                            data-hover-animate-out="op-05"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </article>

                    <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-graphics pf-illustrations">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <a href="portfolio-single.html">
                                    <img src="demos/travel/images/packages/6.jpg" alt="Hill Trekking">
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content dark flex-column">
                                            <div class="portfolio-desc py-0 text-center">
                                                <h3>Hill Trekking</h3>
                                            </div>
                                        </div>
                                        <div class="bg-overlay-bg dark op-ts op-05" data-hover-animate="op-1"
                                            data-hover-animate-out="op-05"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </article>

                    <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-uielements pf-icons">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <a href="portfolio-single-video.html">
                                    <img src="demos/travel/images/packages/7.jpg" alt="Forest Camping">
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content dark flex-column">
                                            <div class="portfolio-desc py-0 text-center">
                                                <h3>Forest Camping</h3>
                                            </div>
                                        </div>
                                        <div class="bg-overlay-bg dark op-ts op-05" data-hover-animate="op-1"
                                            data-hover-animate-out="op-05"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </article>

                    <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-graphics">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <a href="portfolio-single.html">
                                    <img src="demos/travel/images/packages/8.jpg" alt="River Rafting">
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content dark flex-column">
                                            <div class="portfolio-desc py-0 text-center">
                                                <h3>River Rafting</h3>
                                            </div>
                                        </div>
                                        <div class="bg-overlay-bg dark op-ts op-05" data-hover-animate="op-1"
                                            data-hover-animate-out="op-05"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </article>

                </div>

                <div class="row align-items-stretch mx-0 clearfix">

                    <div id="popular-dest-map" class="col-md-6 col-lg-8 px-0 d-none d-md-block">
                        <div class="gmap h-100" data-latitude="39.3262345" data-longitude="-4.8380649" data-zoom="2"
                            data-markers='[{latitude:-37.813629, longitude:144.963058,icon:{image:"images/icons/map-icon-red.png",iconsize:[32,39],iconanchor:[16,36]}},{latitude:38.9743901, longitude:1.41974632,icon:{image:"images/icons/map-icon-red.png",iconsize:[32,39],iconanchor:[16,36]}},{latitude:40.7127281, longitude:-74.0060152,icon:{image:"images/icons/map-icon-red.png",iconsize:[32,39],iconanchor:[16,36]}},{latitude:-22.9110137, longitude:-43.2093727,icon:{image:"images/icons/map-icon-red.png",iconsize:[32,39],iconanchor:[16,36]}},{latitude:55.4792046, longitude:37.3273304,icon:{image:"images/icons/map-icon-red.png",iconsize:[32,39],iconanchor:[16,36]}},{latitude:41.85223935, longitude:12.63103662,icon:{image:"images/icons/map-icon-red.png",iconsize:[32,39],iconanchor:[16,36]}},{latitude:28.6138954, longitude:77.2090057,icon:{image:"images/icons/map-icon-red.png",iconsize:[32,39],iconanchor:[16,36]}},{latitude:13.7538929, longitude:100.8160803,icon:{image:"images/icons/map-icon-red.png",iconsize:[32,39],iconanchor:[16,36]}},{latitude:25.0750095, longitude:55.18876088,icon:{image:"images/icons/map-icon-red.png",iconsize:[32,39],iconanchor:[16,36]}},{latitude:-33.928992, longitude:18.417396,icon:{image:"images/icons/map-icon-red.png",iconsize:[32,39],iconanchor:[16,36]}}]'
                            data-styles='[{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#e0efef"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"hue":"#1900ff"},{"color":"#c0e8e8"}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":100},{"visibility":"simplified"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"visibility":"on"},{"lightness":700}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#7dcdcd"}]}]'
                            data-scrollwheel="false"></div>
                    </div>

                    <div class="col-md-6 col-lg-4 col-padding" style="background-color: #F9F9F9;">
                        <div class="heading-block border-bottom-0">
                            <h4>Popular Destinations</h4>
                        </div>

                        <div class="posts-sm row col-mb-30">
                            <div class="entry col-sm-6 col-md-12">
                                <div class="grid-inner row align-items-center no-gutters">
                                    <div class="col-auto">
                                        <div class="entry-image">
                                            <a href="#"><img src="images/magazine/small/1.jpg" alt="Image"></a>
                                        </div>
                                    </div>
                                    <div class="col pl-3">
                                        <div class="entry-title">
                                            <h4><a href="#">7 Nights/8 Days Europe</a></h4>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><span class="color">$599</span> onwards</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="entry col-sm-6 col-md-12">
                                <div class="grid-inner row align-items-center no-gutters">
                                    <div class="col-auto">
                                        <div class="entry-image">
                                            <a href="#"><img src="images/magazine/small/2.jpg" alt="Image"></a>
                                        </div>
                                    </div>
                                    <div class="col pl-3">
                                        <div class="entry-title">
                                            <h4><a href="#">4 Nights/5 Days Thailand</a></h4>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><span class="color">$399</span> onwards</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="entry col-sm-6 col-md-12">
                                <div class="grid-inner row align-items-center no-gutters">
                                    <div class="col-auto">
                                        <div class="entry-image">
                                            <a href="#"><img src="images/magazine/small/3.jpg" alt="Image"></a>
                                        </div>
                                    </div>
                                    <div class="col pl-3">
                                        <div class="entry-title">
                                            <h4><a href="#">11 Nights/12 Days America</a></h4>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><span class="color">$1299</span> onwards</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="entry col-sm-6 col-md-12">
                                <div class="grid-inner row align-items-center no-gutters">
                                    <div class="col-auto">
                                        <div class="entry-image">
                                            <a href="#"><img src="images/magazine/small/4.jpg" alt="Image"></a>
                                        </div>
                                    </div>
                                    <div class="col pl-3">
                                        <div class="entry-title">
                                            <h4><a href="#">14 Nights/15 Days New Zealand</a></h4>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><span class="color">$1999</span> onwards</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <a href="#" class="button button-full button-dark center bottommargin-lg">
                    <div class="container clearfix">
                        Can't find your Favorite Package? <strong>Browse Packages</strong> <i class="icon-caret-right"
                            style="top:4px;"></i>
                    </div>
                </a>

                <div class="container">

                    <div class="heading-block center">
                        <h2>Latest from our Blog</h2>
                        <span>Stay in Touch with the Latest Travel Trends &amp; Destination News</span>
                    </div>

                    <div class="row posts-md col-mb-50">
                        <div class="entry col-md-6">
                            <div class="grid-inner row align-items-center">
                                <div class="col-lg-6">
                                    <div class="entry-image mb-0">
                                        <a href="#"><img src="demos/travel/images/blog/1.jpg" alt="Paris"></a>
                                    </div>
                                </div>
                                <div class="col-lg-6 mt-3 mt-lg-0">
                                    <span class="before-heading">Sightseeing</span>
                                    <div class="entry-title title-xs nott">
                                        <h3><a href="#">Things to do in Bangkok for free</a></h3>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><i class="icon-calendar3"></i> 16th July</li>
                                            <li><a href="#"><i class="icon-comments"></i> 05</a></li>
                                        </ul>
                                    </div>
                                    <div class="entry-content">
                                        <a href="#" class="more-link">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="entry col-md-6">
                            <div class="grid-inner row align-items-center">
                                <div class="col-lg-6">
                                    <div class="entry-image mb-0">
                                        <a href="#"><img src="demos/travel/images/blog/2.jpg" alt="Paris"></a>
                                    </div>
                                </div>
                                <div class="col-lg-6 mt-3 mt-lg-0">
                                    <span class="before-heading">Nightlife</span>
                                    <div class="entry-title title-xs nott">
                                        <h3><a href="#">Nightclubs to check out in Kuala Lumpur</a></h3>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><i class="icon-calendar3"></i> 21th June</li>
                                            <li><a href="#"><i class="icon-comments"></i> 12</a></li>
                                        </ul>
                                    </div>
                                    <div class="entry-content">
                                        <a href="#" class="more-link">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="entry col-md-6">
                            <div class="grid-inner row align-items-center">
                                <div class="col-lg-6">
                                    <div class="entry-image mb-0">
                                        <a href="#"><img src="demos/travel/images/blog/3.jpg" alt="Paris"></a>
                                    </div>
                                </div>
                                <div class="col-lg-6 mt-3 mt-lg-0">
                                    <span class="before-heading">Hotels</span>
                                    <div class="entry-title title-xs nott">
                                        <h3><a href="#">Prague hotels for every kind of traveller</a></h3>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><i class="icon-calendar3"></i> 02th March</li>
                                            <li><a href="#"><i class="icon-comments"></i> 39</a></li>
                                        </ul>
                                    </div>
                                    <div class="entry-content">
                                        <a href="#" class="more-link">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="entry col-md-6">
                            <div class="grid-inner row align-items-center">
                                <div class="col-lg-6">
                                    <div class="entry-image mb-0">
                                        <a href="#"><img src="demos/travel/images/blog/4.jpg" alt="Paris"></a>
                                    </div>
                                </div>
                                <div class="col-lg-6 mt-3 mt-lg-0">
                                    <span class="before-heading">Eating Out</span>
                                    <div class="entry-title title-xs nott">
                                        <h3><a href="#">Shanghai restaurants for the discerning diner</a></h3>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><i class="icon-calendar3"></i> 11th February</li>
                                            <li><a href="#"><i class="icon-comments"></i> 11</a></li>
                                        </ul>
                                    </div>
                                    <div class="entry-content">
                                        <a href="#" class="more-link">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="section topmargin-lg footer-stick">
                    <div class="container center clearfix">

                        <div class="heading-block bottommargin-sm border-bottom-0">
                            <span class="before-heading color">Create a Custom Plan based on your Taste</span>
                            <h2>Start making your Travel Plans</h2>
                        </div>

                        <p class="lead">Educate, aid, criteria catalyst John Lennon. Life-saving diversity necessities
                            elevate worldwide carbon rights empowerment. Pursue these aspirations leverage,
                            accessibility UNICEF, reduce child mortality collaborative cities safeguards. Informal
                            economies non-partisan; evolution transformative climate change local benefit.</p>

                        <a href="#" class="button button-rounded button-reveal text-right button-xlarge topmargin-sm"><i
                                class="icon-angle-right"></i><span>Create a Package</span></a>

                    </div>
                </div>
            </div>
        </section><!-- #content end -->

        <!-- Footer
		============================================= -->
        <footer id="footer" class="dark" style="background-color: #222;">
            <div class="container">

                <!-- Footer Widgets
				============================================= -->
                <div class="footer-widgets-wrap">

                    <div class="row col-mb-50">
                        <div class="col-md-4">

                            <div class="widget clearfix">

                                <div class="row col-mb-30">
                                    <div class="col-lg-12">
                                        <div class="footer-big-contacts">
                                            <span>Call Us:</span>
                                            (1) 22 84551445
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="footer-big-contacts">
                                            <span>Send an Enquiry:</span>
                                            travel@canvas.com
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="widget subscribe-widget clearfix">
                                <div class="row col-mb-30">
                                    <div class="col-lg-6">
                                        <a href="#" class="social-icon si-dark si-colored si-facebook mb-0"
                                            style="margin-right: 10px;">
                                            <i class="icon-facebook"></i>
                                            <i class="icon-facebook"></i>
                                        </a>
                                        <a href="#"><small style="display: block; margin-top: 3px;"><strong>Like
                                                    us</strong><br>on Facebook</small></a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="#" class="social-icon si-dark si-colored si-rss mb-0"
                                            style="margin-right: 10px;">
                                            <i class="icon-rss"></i>
                                            <i class="icon-rss"></i>
                                        </a>
                                        <a href="#"><small
                                                style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to
                                                RSS Feeds</small></a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-4">

                            <div class="widget clearfix">
                                <h4>Featured Packages</h4>

                                <div class="posts-sm row col-mb-30" id="travel-package-list-footer">
                                    <div class="entry col-12">
                                        <div class="grid-inner row align-items-center no-gutters">
                                            <div class="col-auto">
                                                <div class="entry-image">
                                                    <a href="#"><img class="rounded-circle"
                                                            src="images/magazine/small/1.jpg" alt="Image"></a>
                                                </div>
                                            </div>
                                            <div class="col pl-3">
                                                <div class="entry-title">
                                                    <h4><a href="#">7 Nights/8 Days Europe</a></h4>
                                                </div>
                                                <div class="entry-meta">
                                                    <ul>
                                                        <li><strong>$599</strong> onwards</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="entry col-12">
                                        <div class="grid-inner row align-items-center no-gutters">
                                            <div class="col-auto">
                                                <div class="entry-image">
                                                    <a href="#"><img class="rounded-circle"
                                                            src="images/magazine/small/2.jpg" alt="Image"></a>
                                                </div>
                                            </div>
                                            <div class="col pl-3">
                                                <div class="entry-title">
                                                    <h4><a href="#">4 Nights/5 Days Thailand</a></h4>
                                                </div>
                                                <div class="entry-meta">
                                                    <ul>
                                                        <li><strong>$399</strong> onwards</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="entry col-12">
                                        <div class="grid-inner row align-items-center no-gutters">
                                            <div class="col-auto">
                                                <div class="entry-image">
                                                    <a href="#"><img class="rounded-circle"
                                                            src="images/magazine/small/3.jpg" alt="Image"></a>
                                                </div>
                                            </div>
                                            <div class="col pl-3">
                                                <div class="entry-title">
                                                    <h4><a href="#">11 Nights/12 Days America</a></h4>
                                                </div>
                                                <div class="entry-meta">
                                                    <ul>
                                                        <li><strong>$1299</strong> onwards</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-4">

                            <div class="widget widget_links clearfix">

                                <h4>Popular Destinations</h4>

                                <div class="row col-mb-30">
                                    <div class="col-6">
                                        <ul>
                                            <li><a href="#">Thailand</a></li>
                                            <li><a href="#">Indonesia</a></li>
                                            <li><a href="#">Italy</a></li>
                                            <li><a href="#">Spain</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-6">
                                        <ul>
                                            <li><a href="#">India</a></li>
                                            <li><a href="#">France</a></li>
                                            <li><a href="#">Philippines</a></li>
                                            <li><a href="#">New Zealand</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                            <div class="widget subscribe-widget clearfix">
                                <h5>Get Latest <strong>Offers</strong> &amp; <strong>Coupons</strong> by Email:</h5>
                                <div class="widget-subscribe-form-result"></div>
                                <form id="widget-subscribe-form" action="include/subscribe.php" method="post"
                                    class="mb-0">
                                    <div class="input-group mx-auto">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="icon-email2"></i></div>
                                        </div>
                                        <input type="email" id="widget-subscribe-form-email"
                                            name="widget-subscribe-form-email" class="form-control required email"
                                            placeholder="Enter your Email">
                                        <div class="input-group-append">
                                            <button class="btn btn-danger bg-color" type="submit">Subscribe</button>
                                        </div>
                                    </div>
                                </form>
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

                        <div class="col-md-6 text-center text-md-left">
                            Copyrights &copy; 2020 All Rights Reserved by Canvas Inc.<br>
                            <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a>
                            </div>
                        </div>

                        <div class="col-md-6 text-center text-md-right">
                            <div class="d-flex justify-content-center justify-content-md-end">
                                <a href="#" class="social-icon si-small si-borderless si-facebook">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>

                                <a href="#" class="social-icon si-small si-borderless si-twitter">
                                    <i class="icon-twitter"></i>
                                    <i class="icon-twitter"></i>
                                </a>

                                <a href="#" class="social-icon si-small si-borderless si-gplus">
                                    <i class="icon-gplus"></i>
                                    <i class="icon-gplus"></i>
                                </a>

                                <a href="#" class="social-icon si-small si-borderless si-pinterest">
                                    <i class="icon-pinterest"></i>
                                    <i class="icon-pinterest"></i>
                                </a>

                                <a href="#" class="social-icon si-small si-borderless si-vimeo">
                                    <i class="icon-vimeo"></i>
                                    <i class="icon-vimeo"></i>
                                </a>

                                <a href="#" class="social-icon si-small si-borderless si-github">
                                    <i class="icon-github"></i>
                                    <i class="icon-github"></i>
                                </a>

                                <a href="#" class="social-icon si-small si-borderless si-yahoo">
                                    <i class="icon-yahoo"></i>
                                    <i class="icon-yahoo"></i>
                                </a>

                                <a href="#" class="social-icon si-small si-borderless si-linkedin">
                                    <i class="icon-linkedin"></i>
                                    <i class="icon-linkedin"></i>
                                </a>
                            </div>

                            <div class="clear"></div>

                            <i class="icon-envelope2"></i> info@canvas.com <span class="middot">&middot;</span> <i
                                class="icon-headphones"></i> +1-11-6541-6369 <span class="middot">&middot;</span> <i
                                class="icon-skype2"></i> CanvasOnSkype
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
</body>

</html>
