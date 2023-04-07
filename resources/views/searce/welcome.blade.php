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
                        <strong style="color:#0769FF;" class="fws-bold">Aiven</strong> provides managed open-source data
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
                        <strong style="color:#0769FF;" class="fws-bold">Jojonomics</strong> is a platform that
                        provides
                        complete HR, productivity, sales, finance, operation and data intelligence applications. You can
                        customize your applications according to your company's needs and manage your business in
                        real-time from anywhere.
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
                <div class="col-lg-2 col-md-4 col-6 text-center p-3">
                    <img src="{{ asset('assets/images/speakers/benedikta.png') }}" alt="Benedikta">
                    <h5 class="mt-3">Benedikta Satya</h5>
                    <p class="pt-1 px-2" style="line-height:18px;">Country Director Searce</p>
                </div>
                <div class="col-lg-2 col-md-4 col-6 text-center p-3">
                    <img src="{{ asset('assets/images/speakers/felicity.png') }}" alt="Felicity">
                    <h5 class="mt-3">Felicity Burrows</h5>
                    <p class="pt-1 px-2" style="line-height:18px;">Alliance Manager Fivetran</p>
                </div>
                <div class="col-lg-2 col-md-4 col-6 text-center p-3">
                    <img src="{{ asset('assets/images/speakers/heryudi.png') }}" alt="Heryudi Ganesha">
                    <h5 class="mt-3">Heryudi Ganesha</h5>
                    <p class="pt-1 px-2" style="line-height:18px;">VP of IT Operations and infrastructure Jojonomic
                    </p>
                </div>
                <div class="col-lg-2 col-md-4 col-6 text-center p-3">
                    <img src="{{ asset('assets/images/speakers/budi.png') }}" alt="Budi Kusuma Utama">
                    <h5 class="mt-3 p-0" style="font-size: 17px;">Budi Kusuma Utama</h5>
                    <p class="pt-1 px-2" style="line-height:18px;">Senior Solution Architect Aiven</p>
                </div>
                <div class="col-lg-2 col-md-4 col-6 text-center p-3">
                    <img src="{{ asset('assets/images/speakers/beny.png') }}" alt="Beny Ibrani">
                    <h5 class="mt-3">Beny Ibrani</h5>
                    <p class="pt-1 px-2" style="line-height:18px;">Cloud Solution Architect Intel</p>
                </div>
            </div>
        </div>
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
                        Join us on <strong style="color: #0769FF;">25 May 2023 </strong> at <strong style="color: #0769FF;">Lotus Room, Shangri La Hotel, Jakarta</strong> to network with industry leaders and learn how cloud computing can transform your business.
                    </p>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-8" style="border-left:4px solid #000;">
                    <h4 class="pb-2">For any enquiries please contact:</h4>
                    <p class="desc-service">Susi (0858 9059 7668) or <br> email to searce@event.co.id</p>
                </div>
                <div class="col-4 px-md-5 d-flex align-items-center">
                    <a id="reg-button" class="btn btn-lg btn-block rounded-0 px-2" style="background-color: #0769FF; color:#fff" href="register">Register Here</a>
                </div>
            </div>
        </div>
    </section>

    <section class="footer-area footer-dark">
        <div class="container">
            <div class="row d-flex justify-content-between align-items-center mb-lg-4">
                <div class="col-md-6 col-12">
                    <div class="row p-3">
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
                    <div class="row pt-3 d-flex justify-content-center">
                        <img src="assets/images/intel-footer.png" alt="Intel">
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

    <script>
        var data = {
            !!$login!!
        };

        $(document).ready(function() {
            document.getElementById('contact').scrollIntoView();

            if (data != 1) {
                $('#modal-login').modal({
                    show: true,
                    focus: false
                })
            }

            $('.close').click(function() {
                $('.modal-body').empty()
            })

            $('#modal').on('hidden.bs.modal', function(event) {
                $('.modal-body').empty()
            })

            $('#speaker-1').click(function() {
                $('.modal-body').append(
                    '<img src="assets/images/speakers/wisnu-wijaya-putra.jpg?v=.date(YmdHis)" alt=""><div style="padding-top: 1rem;" class="portfolio-overlay d-flex align-items-center justify-content-center"><div class="portfolio-content"><h3 class="title">Wisnu Wijaya Putra</h3><h4 style="font-weight: normal;" class="title">Assistant Vice President of Sales B2B</h4></br><p class="text" style="font-size: 14px;">Graduated from Trisakti University majoring Industrial Engineering.</p></br><p class="text" style="font-size: 14px;">He is enthusiast on negotiation, B2B, and sales with more than 10 years’ experience on B2B.</p></br><p class="text" style="font-size: 14px;">Now he is in charge as Head of Product & Procurement B2B / B2G in Blibli.</p></br><p class="text" style="font-size: 14px;">He believes Blibli B2B will be no 1 B2B platform and bring transparent and seamless corporate procurement incoming years.</p></br></div></div>'
                );
                $('#modal').modal({
                    show: true,
                    focus: false,
                    keyboard: false
                })
            });

            $('#speaker-2').click(function() {
                $('.modal-body').append(
                    '<img src="assets/images/speakers/andreas-ardian-pramaditya.jpg?v=.date(YmdHis)" alt=""> <div style="padding-top: 1rem;" class="portfolio-overlay d-flex align-items-center justify-content-center"> <div class="portfolio-content"> <h3 class="title">Andreas Ardian Pramaditya</h3> <h4 style="font-weight: normal;" class="title">Vice President of Galeri Indonesia</h4> <br> <p class="text" style="font-size: 14px;">Currently being a Vice president of Galeri Indonesia, focusing on managing and maximize profit SME\'s in Blibli.com</p> <br> <p class="text" style="font-size: 14px;">also strategize all collaboration with the government to create an SME development program until led Blibli to get an award</p> <br> <p class="text" style="font-size: 14px;">from Bank Indonesia Award 2018 as the most active digital platform for managing their SME\'s.</p> <br> </div> </div>'
                );
                $('#modal').modal({
                    show: true,
                    focus: false
                })
            });

            $('#speaker-3').click(function() {
                $('.modal-body').append(
                    '<img src="assets/images/speakers/azzizah-purwitasari.jpg?v=.date(YmdHis)" alt=""> <div style="padding-top: 1rem;" class="portfolio-overlay d-flex align-items-center justify-content-center"> <div class="portfolio-content"> <h3 class="title">Azizah Purwitasari</h3> <h4 style="font-weight: normal;" class="title">Vice President of Return Management</h4> <br> <p class="text" style="font-size: 14px;">With over 9 years of value chain practice, Azizah has operated most of critical value chain functions: inventory, logistics, and customer service.</p> <br> <p class="text" style="font-size: 14px;">Through these experiences, she\'s build out capabilities on an important part of the ecommerce value chain, the returns service.</p> <br> <p class="text" style="font-size: 14px;">She launched industry leading capabilities to create hassle free return experience who make Blibli have significant competitive advantages compare to others.</p> <br> <p class="text" style="font-size: 14px;">Azizah is responsible for leading the strategy, growth, financial aspect, operations, and risk management of Return Management.</p> <br> <p class="text" style="font-size: 14px;">This role combines her as a reverse logistic, quality assurance, inventory control and asset recovery, return and dispute resolution, and claim management expertise.</p> <br> </div> </div>'
                );
                $('#modal').modal({
                    show: true,
                    focus: false
                })
            });

            $('#speaker-4').click(function() {
                $('.modal-body').append(
                    '<img src="assets/images/speakers/christian-ng.jpg?v=.date(YmdHis)" alt=""> <div style="padding-top: 1rem;" class="portfolio-overlay d-flex align-items-center justify-content-center"> <div class="portfolio-content"> <h3 class="title">Christian Ng</h3> <h4 style="font-weight: normal;" class="title">Vice President of Handphone Category</h4> <br> <p class="text" style="font-size: 14px;">Christian Ng as a Vice President of Handphone, Tablet and Accessories Category with 7 years experience in Blibli.</p> <br> <p class="text" style="font-size: 14px;">He focused on building relationships with brands and seller partners, while developing business growth and increasing sales both in retail and marketplace in the Handphone, Tablet and Accessories Category.</p> <br> <p class="text" style="font-size: 14px;">In the same time, develop Trade-In Centre and O2O (Click n Collect) Solutions for Seller Partners.</p> <br> </div> </div>'
                );
                $('#modal').modal({
                    show: true,
                    focus: false
                })
            });
            $('#speaker-5').click(function() {
                $('.modal-body').append(
                    '<img src="assets/images/speakers/yohanes-elniko-dimas.jpg?v=.date(YmdHis)" alt=""> <div style="padding-top: 1rem;" class="portfolio-overlay d-flex align-items-center justify-content-center"> <div class="portfolio-content"> <h3 class="title">Christian Ng</h3> <h4 style="font-weight: normal;" class="title">Vice President of Handphone Category</h4> <br> <p class="text" style="font-size: 14px;">Christian Ng as a Vice President of Handphone, Tablet and Accessories Category with 7 years experience in Blibli.</p> <br> <p class="text" style="font-size: 14px;">He focused on building relationships with brands and seller partners, while developing business growth and increasing sales both in retail and marketplace in the Handphone, Tablet and Accessories Category.</p> <br> <p class="text" style="font-size: 14px;">In the same time, develop Trade-In Centre and O2O (Click n Collect) Solutions for Seller Partners.</p> <br> </div> </div>'
                );
                $('#modal').modal({
                    show: true,
                    focus: false
                })
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

    <!-- <script type="text/javascript" id="zsiqchat">
        var $zoho = $zoho || {};
        $zoho.salesiq = $zoho.salesiq || {
            widgetcode: "8ec571dae4f7f70cc323cddc5e23ff89a67d9297bdf3ecd8eef9ddd36ffd02e14700999c094ab2c0f9ef9a3dd080d988",
            values: {},
            ready: function() {}
        };
        var d = document;
        s = d.createElement("script");
        s.type = "text/javascript";
        s.id = "zsiqscript";
        s.defer = true;
        s.src = "https://salesiq.zoho.com/widget";
        t = d.getElementsByTagName("script")[0];
        t.parentNode.insertBefore(s, t);
    </script> -->
</body>

</html>
