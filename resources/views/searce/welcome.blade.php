<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-RB4HX89L0Z"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-RB4HX89L0Z');
    </script>

    <meta charset="utf-8">
    <meta http-equiv="expires" content="Sun, 01 Jan 2014 00:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" />

    <!--====== Title ======-->
    <title>Welcome | Searce Google Cloud</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/cg.png') }}">

    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="assets/css/slick.css">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.css">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="assets/css/default.css">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="assets/css/style.css?v=.date(YmdHisiu)">
    <link rel="stylesheet" href="{{ asset('css/popup.css') }}">
</head>

<body>
    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="navbar-area" class="navbar-area">
        <div class="container blur">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="/">
                            <img class="logo-nav-searce" src="assets/images/searce.png" alt="Logo">
                        </a>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarTwo">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item"><a class="page-scroll" href="#home">About</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#agenda">Agenda</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#speakers">Speakers</a></li>
                            </ul>
                        </div>
                        <div class="pr-lg-5 pb-lg-1">
                            <ul>
                                <li>
                                    <a id="reg-button" class="solid px-3 py-2"
                                        style="background-color: #0769FF; color:#fff;" href="register">Register Here</a>
                                </li>
                            </ul>
                        </div>

                        <a class="navbar-brand" style="margin-right: 0 !important;" href="/">
                            <img class="logo-nav-gcloud" src="assets/images/gcloud.png" alt="Logo">
                        </a>
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <section style="padding-top: 5rem;" id="home">
        <div id="row">
            <img id="banner" src="assets/images/banner-home.png" alt="Hero" class="d-block w-100">
        </div>
    </section>

    <section id="about" class="contact-area py-md-5 py-3" style="background-color: #7A7A7A;">
        <div class="container blur">
            <div class="row justify-content-center py-md-4 py-2">
                <div class="col-lg-11 col-md-10">
                    <div class="section-title py-md-4 py-0">
                        <p class="join-us">Join us at our upcoming cloud computing
                            event in partnership with Aiven, Fivetran, and Jojonomics. As a Google Cloud Platform global
                            premium partner, Searce is committed to bringing you the latest trends and innovations in
                            cloud computing that can help your business grow.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <section class="contact-area py-md-5 py-3" style="background-color: #fff;">
        <div class="container blur py-5 py-3">
            <div class="row">
                <div class="col-3 d-flex align-items-center justify-content-center"
                    style="border-right:3px solid #0769FF;">
                    <img src="assets/images/aivent-homepage.png" alt="Aivent" class="img-service">
                </div>
                <div class="col-9 d-flex align-items-center p-lg-5 p-md-3 p-sm-2">
                    <p class="desc-service" style="text-align:justify !important;">
                        <strong style="color:#0769FF;" class="fws-bold">Aiven</strong> provides managed open-source
                        data
                        infrastructure solutions, including PostgreSQL, MySQL, Redis, Elasticsearch, Kafka, and
                        Cassandra. Their use cases include e-commerce, gaming, and SaaS.
                    </p>
                </div>
            </div> <!-- row -->
            <div class="row my-5">
                <div class="col-3 d-flex align-items-center justify-content-center"
                    style="border-right:3px solid #0769FF;">
                    <img src="assets/images/fivetran-homepage.png" alt="Aivent" class="img-service">
                </div>
                <div class="col-9 d-flex align-items-center p-lg-5 p-md-3 p-sm-2">
                    <p class="desc-service" style="text-align:justify !important;">
                        <strong style="color:#0769FF;" class="fws-bold">Fivetran</strong> is a cloud-based data
                        integration platform that offers pre-built connectors for various data sources, including
                        databases, applications, and APIs. It integrates data into cloud data warehouses such as
                        BigQuery, Snowflake, and Redshift. Their use cases include marketing, finance, and analytics.
                    </p>
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-3 d-flex align-items-center justify-content-center"
                    style="border-right:3px solid #0769FF;">
                    <img src="assets/images/jojonomics-homepage.png" alt="Aivent" class="img-service">
                </div>
                <div class="col-9 d-flex align-items-center p-lg-5 p-md-3 p-sm-2">
                    <p class="desc-service" style="text-align:justify !important;">
                        <strong style="color:#0769FF;" class="fws-bold">Jojonomics</strong> provides Officeless Operating System, a no-code application development platform designed to help companies easily build and develop mobile and web applications without requiring extensive coding or programming skills. Use case includes HRIS, Expense Management, HSE System, Procurement Solution..
                    </p>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <section class="contact-area py-md-5 py-3" style="background-color: #000;">
        <div class="container blur">
            <div class="row justify-content-center py-md-4 py-2">
                <div class="col-lg-11 col-md-10">
                    <div class="section-title py-md-4 py-0">
                        <p class="join-us">Our keynote speakers will provide practical advice on implementing cloud
                            computing technologies and optimizing your infrastructure for maximum performance. You'll
                            have hands-on experience with the latest tools and services, and learn how to manage your
                            cloud environment efficiently.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <section id="speakers" class="portfolio-area portfolio-four">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center">
                        <h3 style="color: #0769FF;" class="title">FEATURED SPEAKERS</h3>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-lg-between justify-content-center">
                @foreach ($speakers as $speaker)
                    <div class="col-lg-2 col-md-4 col-6 text-center p-3">
                        <a href="#{{ $speaker['id'] }}" class="open-popup-link">
                            <img src="{{ asset('assets/images/speakers/' . $speaker['filename']) }}" alt="Benedikta">
                            <h5 class="mt-3">{{ $speaker['name'] }}</h5>
                            <p class="pt-1 px-2" style="line-height:18px;">{{ $speaker['job'] }}</p>
                        </a>
                    </div>
                    <div id="{{ $speaker['id'] }}" class="white-popup mfp-with-anim mfp-hide">
                        <div class="row justify-content-center">
                            <div class="col-12 d-flex justify-content-center">
                                <img src="{{ asset('assets/images/speakers/'. $speaker['filename']) }}" alt="Heryudi Ganesha"
                                    height="200px">
                            </div>
                            <div class="col-12 text-center">
                                <h3 class="mt-4 mb-1 text-center">{{ $speaker['name'] }}</h3>
                                <p class="pt-1 px-2 mb-4 text-secondary" style="line-height:18px;">{{ $speaker['job'] }}</p>
                                <p class="text-justify">{!! $speaker['bio'] !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        {{-- END DETAIL OF SPEAKERS --}}

        <div class="my-5">
            <div class="row">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <button type="button" class="btn btn-lg p-2 px-4 text-lg"
                        style="border-radius: 25px; font-size: 1.6rem; background-color: #0769FF; color:#fff">Key
                        takeaways include:</button>
                </div>
            </div>
            <div class="row" style="background-color: #0769FF; height:0.6rem; margin-top: -30px;"></div>
        </div>
        <div class="container mt-5">
            <div class="row justify-content-center pt-4">
                <div class="col-12 p-3 pl-5">
                    <ul style="list-style-type: disc;" role="list">
                        <li class="py-2" data-icon="😎">
                            <p class="text-list">Understanding the latest trends and innovations in cloud computing</p>
                        </li>
                        <li class="py-2">
                            <p class="text-list">Best practices for implementing cloud computing technologies</p>
                        </li>
                        <li class="py-2">
                            <p class="text-list">Strategies for leveraging the latest tools and services to achieve
                                your business objectives</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="agenda" class="contact-area py-3" style="background-color: #7A7A7A;">
        <div class="container py-5 py-3">
            <div class="row px-2">
                <div class="col-12 my-2 bg-white p-0">
                    <table class="table table-striped table-bordered mb-0">
                        <thead style="background-color: #0769FF; color:#fff;">
                            <th class="text-center">Time</th>
                            <th class="text-center">Agenda</th>
                        </thead>
                        <tbody>
                            @foreach ($agendas as $event)
                                <tr>
                                    <td>
                                        <p class='text-center'>{{ $event['time'] }}</p>
                                    </td>
                                    <td>
                                        <b style="color: #000;">{{ $event['title'] }}</b>
                                        <br>
                                        {{ $event['speaker'] }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <section class="agenda-area py-3">
        <div class="container py-5 py-3">
            <div class="row px-2">
                <div class="col-12 my-2 p-0 text-center">
                    <p class="join-us text-center" style="color:#000;">
                        Join us on <strong style="color: #0769FF;">25 May 2023 </strong> at <strong
                            style="color: #0769FF;">Lotus Room, Shangri La Hotel, Jakarta</strong> to network with
                        industry leaders and learn how cloud computing can transform your business.
                    </p>
                </div>
            </div>
            <div class="row pt-5 pl-2 pr-md-0 pr-2">
                <div class="col-8" style="border-left:4px solid #000;">
                    <h4 class="pb-2">For any enquiries please contact:</h4>
                    <p class="desc-service">Susi (0858 9059 7668) or <br> email to searce@event.co.id</p>
                </div>
                <div class="col-4 d-flex align-items-center justify-content-end">
                    <div class="row">
                        <a id="reg-button" class="btn btn-lg btn-block rounded-0 px-2"
                            style="background-color: #0769FF; color:#fff" href="register">Register Here</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="footer-area footer-dark">
        <div class="container">
            <div class="row d-flex justify-content-between align-items-center mb-lg-4">
                <div class="col-md-6 col-12">
                    <div class="row pb-md-3 pb-0 pl-3">
                        <strong>Supported by</strong>
                    </div>
                    <div class="row">
                        <div class="col-4 py-3 px-4">
                            <img src="assets/images/aiven-footer.png" alt="Aiven" class="d-block w-100">
                        </div>
                        <div class="col-4 py-3 px-4"
                            style="border-left: 1px solid #e0e0e0; border-right: 1px solid #e0e0e0;">
                            <img src="assets/images/fivetran-footer.png" alt="Fivetran" class="d-block w-100">
                        </div>
                        <div class="col-4 py-3 px-4">
                            <img src="assets/images/Jojonomic-footer.png" alt="Jojomic" class="d-block w-100">
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-12">
                    <div class="row pt-3 justify-content-end intel-large">
                        <img src="assets/images/intel-footer.png" alt="Intel" height="40">
                    </div>
                    <div class="row pt-3 pr-3 justify-content-end intel-sm">
                        <div class="col-3">
                            <img src="assets/images/intel-footer.png" alt="Intel">
                        </div>
                    </div>
                </div>
            </div> <!-- row -->
            <div class="row">
                <div
                    style="width:100%;text-align:center;padding-top:20px;padding-bottom:0px;border-top: 1px solid #e0e0e0;margin-top:1rem;">
                    Copyright © 2023 PT. Quantum Integrated Services.
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>

    <!--====== Jquery js ======-->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js"></script>


    <script>
        let img_responsive = (x) => {
            let banner = document.getElementById('banner');

            if (x.matches) { // If media query matches
                banner.src = "assets/images/banner-home-mobile.png"
            } else {
                banner.src = "assets/images/banner-home.png"
            }
        }

        var x = window.matchMedia("(max-width: 425px)")
        img_responsive(x) // Call listener function at run time
        x.addListener(img_responsive) // Attach listener function on state changes
    </script>

    <script>
        window.onscroll = function() {
            stickyNav()
        };

        // Get the navbar
        var navbar = document.getElementById("navbar-area");

        // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
        function stickyNav() {
            if (window.pageYOffset >= 20) {
                navbar.classList.add("sticky")
            } else {
                navbar.classList.remove("sticky");
            }
        }

        $(function() {
            $("#carouselThree").carousel({
                pause: false,
                interval: false
            });
        });
    </script>

    <!--====== Bootstrap js ======-->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--====== Slick js ======-->
    <script src="assets/js/slick.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== Ajax Contact js ======-->
    <script src="assets/js/ajax-contact.js"></script>

    <!--====== Isotope js ======-->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>

    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>

    <script>
        $('.open-popup-link').magnificPopup({
            type: 'inline',
            midClick: true,
            removalDelay: 500,
            mainClass: 'mfp-zoom-in'
        });
    </script>

</body>

</html>
