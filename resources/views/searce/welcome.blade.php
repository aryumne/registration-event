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
                            <img class="logo-nav" src="assets/images/navbrand.png" alt="Logo">
                        </a>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarTwo">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item"><a class="page-scroll" href="#home">About</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#agenda">Agenda</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#speakers">Speakers</a></li>
                            </ul>
                        </div>

                        <div>
                            <ul>
                                <li>
                                    <a id="reg-button" class="solid" href="register">Register Here</a>
                                </li>
                            </ul>
                        </div>
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

    <section id="contact" class="contact-area py-md-5 py-3" style="background-color: #7A7A7A;">
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
                    <p class="desc-service">
                        <span style="color:#0769FF;" class="fws-bold">Aiven</span> provides managed open-source data
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
                    <p class="desc-service">
                        <span style="color:#0769FF;" class="fws-bold">Fivetran</span> is a cloud-based data
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
                    <p class="desc-service">
                        <span style="color:#0769FF;" class="fws-bold">Jojonomics</span> is a platform that provides
                        complete HR, productivity, sales, finance, operation and data intelligence applications. You can
                        customize your applications according to your company's needs and manage your business in
                        real-time from anywhere.
                    </p>
                </div>
            </div> <!-- row -->

            <div style="margin-top: 4rem;">
                <a id="reg-button" class="btn btn-primary btn-lg btn-block" href="register">Register Here</a>
            </div>
        </div> <!-- container -->
    </section>

    <section id="agenda" class="contact-area py-md-5 py-3" style="background-color: #F4F6F7;">
        <div class="container py-5 py-3">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-30 pt-0">
                        <h3 class="title">Agenda</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="accordion" id="accordionExample">
                        <!-- <div class="card">
                            <div class="card-header" id="headingOne" style="background-color: #4374B6;">
                                <h5 class="mb-0">
                                    <h3 id="head-title-agenda" class="title">
                                        Hari ke-1
                                        <br>
                                        MSME UPDATE 2021
                                    </h3>
                                    <p style="margin-top: 0.5rem;" id="content-text-agenda-1">
                                        Kamis, 26 Agustus 2021 | 10.00 – 11.30
                                    </p>
                                    <p id="content-text-agenda-2"> Khusus untuk Undangan*
                                        <button id="btn-collapse-agenda" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            see schedule
                                        </button>
                                    </p>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <table id="agenda-table" class="table table-borderless">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <b style="color: #000;">DIGITALISASI UMKM INDONESIA UNTUK BERTAHAN DAN MENINGKATKAN PEREKONOMIAN NASIONAL</b>
                                                    <br>
                                                    Erick Thohir – Menteri BUMN
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b style="color: #000;">
                                                        PEMAPARAN HASIL RISET BLIBLI:
                                                        <br>
                                                        REKOMENDASI PENGEMBANGAN UMKM UNTUK PARA STAKEHOLDER
                                                    </b>
                                                    <br>
                                                    BE Satrio – Litbang Kompas
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b style="color: #000;">
                                                        PEMAPARAN HASIL RISET BLIBLI:
                                                        <br>
                                                        KONTRIBUSI BLIBLI TERHADAP PENGEMBANGAN UMKM DI INDONESIA
                                                    </b>
                                                    <br>
                                                    Haikal Siregar – Boston Consulting Group Indonesia
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b style="color: #000;">
                                                        INISIATIF BLIBLI UNTUK PENGEMBANGAN UMKM DI INDONESIA
                                                    </b>
                                                    <br>
                                                    Kusumo Martanto – CEO & Co-Founder Blibli
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> -->
                        <div class="card">
                            <div class="card-header" id="headingTwo" style="background-color: #4374B6;">
                                <h5 class="mb-0">
                                    <h3 id="head-title-agenda" class="title text-uppercase">
                                        Title Event
                                    </h3>
                                    <p id="content-text-agenda-1" style="margin-top: 0.5rem;">
                                        Date Event
                                    </p>
                                    <p id="content-text-agenda-2"> Invite Only*
                                        <button id="btn-collapse-agenda" class="btn btn-link collapsed"
                                            type="button" data-toggle="collapse" data-target="#collapseTwo"
                                            aria-expanded="true" aria-controls="collapseTwo">
                                            see schedule
                                        </button>
                                    </p>
                                </h5>
                            </div>

                            <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <table id="agenda-table" class="table table-borderless">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <b style="color: #000;">KEYNOTE SPEECH: BLIBLI ECOSYSTEM</b>
                                                    <br>
                                                    Kusumo Martanto – Chief Executive Officer & Co-Founder Blibli
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b style="color: #000;">MARKET INSIGHT AND TRENDS 2021
                                                    </b>
                                                    <br>
                                                    <p class='text-table'>Memahami trend belanja konsumen pasca
                                                        post-normal</p>
                                                    Madeleine de Guzman – Sector Lead Google Indonesia
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b style="color: #000;">BLIBLI 360: LAYANAN ANDALAN BLIBLI BUAT
                                                        JAMIN PELANGGAN NYAMAN
                                                    </b>
                                                    <br>
                                                    <p class='text-table'>Memaksimalkan layanan Blibli yang membantu
                                                        meningkatkan loyalitas konsumen terhadap toko di Blibli</p>
                                                    Azizah Purwitasari | Gladys Haliman | Yohanes Elniko Dimas | Rency
                                                    Reges
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b style="color: #000;">BLIBLI TODAY: INOVASI BIKIN BISNIS MAKIN
                                                        JEMPOLAN
                                                    </b>
                                                    <br>
                                                    <p class='text-table'>Pahami cara kerja dan pemanfaatan inovasi
                                                        produk Blibli seperti: Tukar-Tambah (Trade-In), 2 jam sampai
                                                        (2HD), Blibli Hasannah, Bliklan, dan bisnis B2B untuk
                                                        meningkatkan potensi Binsis di Blibli</p>
                                                    Stephanie Santoso | Christian Ng | Sandy Kusuma | Wisnu Wijaya |
                                                    Jakop Parlindungan
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b style="color: #000;">BLIBLI TECHNOLOGY: MACHINE LEARNING BANTU
                                                        JUALAN MAKIN CUAN
                                                    </b>
                                                    <br>
                                                    <p class='text-table'>Pelajari cara kerja algoritma machine
                                                        learning dan sistem rekomendasi Blibli untuk memaksimalkan
                                                        performa toko
                                                    </p>
                                                    Fanky Mulia | Endro Yuniaryo
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b style="color: #000;">BLIBLI NEXT-CHAPTER: THE ROADMAP
                                                    </b>
                                                    <br>
                                                    <p class='text-table'>Ketahui hasil perjalanan Blibli sepanjang
                                                        2021 dan fokus strategi Blibli kedepan
                                                    </p>
                                                    Yohanes Lukiman - SVP of Business Development Blibli
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b style="color: #000;">BLIBLI FOR INDONESIA: RAHASIA KOLABORASI
                                                        ASIK BIKIN JUALAN SEMAKIN NAIK
                                                    </b>
                                                    <br>
                                                    <p class='text-table'> Ketahui lebih lanjut mengenai hasil riset
                                                        Blibli bersama BCG dan Kompas, serta berbagai program dari
                                                        Galeri Indonesia untuk UMKM Indonesia
                                                    </p>
                                                    BE Satrio | Andreas Ardian Pramaditya | Testimoni Seller
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b style="color: #000;">
                                                        BLIBLI END-YEAR CAMPAIGN 2021:
                                                        <br>
                                                        RAIH KESEMPATAN EMAS, UNTUNG DI UJUNG TAHUN
                                                    </b>
                                                    <br>
                                                    <p class='text-table'>Bersiap menghadapi Harbolnas 2021 bersama
                                                        Blibli</p>
                                                    Wilson Kiantoro
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b style="color: #000;">PARTNER AWARD 2021:</b>
                                                    <br>
                                                    <p class='text-table'>Nantikan pengumuman pemenang Blibli Partner
                                                        Award</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    SESI SPECIAL : STAND-UP COMEDY
                                                    <br>
                                                    <b style="color: #000;">PROBLEMATIKA HUBUNGAN SELLER DAN KONSUMEN
                                                        INDONESIA</b>
                                                    <br>
                                                    Cak Lontong
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="margin-top: 2rem;">
                        <a id="reg-button" class="btn btn-primary btn-lg btn-block" href="register">Register Here</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="speakers"
        style="background:url('assets/images/section-speaker.png') no-repeat;background-size: cover;"
        class="portfolio-area portfolio-four">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center">
                        <h3 style="color: #fff;" class="title">Speakers Information</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="row grid gap-6 mt-35" style="position: relative; height: 824.952px;">
                        <div class="col-12">
                            <div class="row justify-content-center">
                                <div class="col-lg-3 col-md-4 col-sm-6 mt-4">
                                    <!-- 1 -->
                                    <div class="single-portfolio">
                                        <div class="portfolio-image">
                                            <img src="assets/images/speakers/erick-thohir.png?v=.date(YmdHis)"
                                                alt="">
                                            <div
                                                class="portfolio-overlay d-flex align-items-center justify-content-center">
                                                <div class="portfolio-content">
                                                    <h3 class="title">Erick Thohir</h3>
                                                    <p class="text">Minister of State-Owned Enterprise</p>
                                                    </br>
                                                    <p class="text">
                                                        Born on May 30th 1970. Appointed as the Minister of State-Owned
                                                        Enterprises on October 23rd 2019.
                                                    </p>
                                                    <a style="cursor: pointer; font-size: 19px;" id="speaker-17"
                                                        role="button" tabindex="0">See more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 mt-4">
                                    <!-- 2 -->
                                    <div class="single-portfolio">
                                        <div class="portfolio-image">
                                            <img src="assets/images/speakers/kusumo.png?v=.date(YmdHis)"
                                                alt="">
                                            <div
                                                class="portfolio-overlay d-flex align-items-center justify-content-center">
                                                <div class="portfolio-content">
                                                    <h3 class="title">Kusumo Martanto</h3>
                                                    <p class="text">CEO & Co-Founder Blibli</p>
                                                    </br>
                                                    <p class="text">
                                                        Kusumo Martanto is the Chief Executive Officer (CEO) and
                                                        Co-Founder of
                                                        Blibli.
                                                    </p>
                                                    <a style="cursor: pointer; font-size: 19px;" id="speaker-18"
                                                        role="button" tabindex="0">See more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 mt-4">
                                    <!-- 3 -->
                                    <div class="single-portfolio">
                                        <div class="portfolio-image">
                                            <img src="assets/images/speakers/haikal-siregar.png?v=.date(YmdHis)"
                                                alt="">
                                            <div
                                                class="portfolio-overlay d-flex align-items-center justify-content-center">
                                                <div class="portfolio-content">
                                                    <h3 class="title">Haikal Siregar</h3>
                                                    <p class="text">President Director of Boston Consulting Group</p>
                                                    </br>
                                                    <p class="text">
                                                        Haikal leads BCG in Indonesia.
                                                    </p>
                                                    <a style="cursor: pointer; font-size: 19px;" id="speaker-19"
                                                        role="button" tabindex="0">See more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row justify-content-center">
                                <div class="col-lg-3 col-md-4 col-sm-6 mt-4">
                                    <!-- 4 -->
                                    <div class="single-portfolio">
                                        <div class="portfolio-image">
                                            <img src="assets/images/speakers/madeline.jpg?v=.date(YmdHis)"
                                                alt="">
                                            <div
                                                class="portfolio-overlay d-flex align-items-center justify-content-center">
                                                <div class="portfolio-content">
                                                    <h3 class="title">Madeleine de Guzman</h3>
                                                    <p class="text">Sector Lead Google Indonesia</p>
                                                    </br>
                                                    <p class="text">
                                                        Madeleine de Guzman is currently the Sector Lead for Google
                                                        Indonesia,
                                                        managing verticals like eCommerce, Travel, Finance and Apps.
                                                    </p>
                                                    <a style="cursor: pointer; font-size: 19px;" id="speaker-20"
                                                        role="button" tabindex="0">See more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 mt-4">
                                    <!-- 5 -->
                                    <div class="single-portfolio">
                                        <div class="portfolio-image">
                                            <img src="assets/images/speakers/satrio.png?v=.date(YmdHis)"
                                                alt="">
                                            <div
                                                class="portfolio-overlay d-flex align-items-center justify-content-center">
                                                <div class="portfolio-content">
                                                    <h3 class="title">BE Satrio</h3>
                                                    <p class="text">Peneliti Litbang Kompas</p>
                                                    </br>
                                                    <p class="text">
                                                        Professional researcher with 24 years experience.
                                                    </p>
                                                    <a style="cursor: pointer; font-size: 19px;" id="speaker-21"
                                                        role="button" tabindex="0">See more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 mt-4">
                                    <!-- 6 -->
                                    <div class="single-portfolio">
                                        <div class="portfolio-image">
                                            <img src="assets/images/speakers/yohanes-elniko-dimas.jpg?v=.date(YmdHis)"
                                                alt="">
                                            <div
                                                class="portfolio-overlay d-flex align-items-center justify-content-center">
                                                <div class="portfolio-content">
                                                    <h3 class="title">Yohanes Elniko Dimas</h3>
                                                    <p class="text">Senior Fleet Management Manager</p>
                                                    </br>
                                                    <p class="text">
                                                        As Senior Fleet Management Management with 9 years experience in
                                                        Blibli.
                                                    </p>
                                                    <a style="cursor: pointer; font-size: 19px;" id="speaker-15"
                                                        role="button" tabindex="0">See more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="footer-area footer-dark py-5">
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

    <script>
        // Create Countdown
        var countDownDate = new Date("Aug 27, 2021 10:00:00").getTime();

        var now = new Date().getTime();

        var distance = countDownDate - now;
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));

        var Countdown = {

            // Backbone-like structure
            $el: $('.countdown'),

            // Params
            countdown_interval: null,
            total_seconds: 0,

            // Initialize the countdown  
            init: function() {

                // DOM
                this.$ = {
                    hours: this.$el.find('.bloc-time.hours .figure'),
                    minutes: this.$el.find('.bloc-time.min .figure'),
                    seconds: this.$el.find('.bloc-time.sec .figure')
                };

                // Init countdown values

                if (days > 0) {
                    this.values = {
                        hours: Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)) + 24,
                        minutes: Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60)),
                        seconds: Math.floor((distance % (1000 * 60)) / 1000),
                    };
                } else {
                    this.values = {
                        hours: Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)),
                        minutes: Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60)),
                        seconds: Math.floor((distance % (1000 * 60)) / 1000),
                    };
                }

                // Initialize total seconds
                this.total_seconds = this.values.hours * 60 * 60 + (this.values.minutes * 60) + this.values.seconds;

                // Animate countdown to the end 
                this.count();
            },

            count: function() {

                var that = this,
                    $hour_1 = this.$.hours.eq(0),
                    $hour_2 = this.$.hours.eq(1),
                    $min_1 = this.$.minutes.eq(0),
                    $min_2 = this.$.minutes.eq(1),
                    $sec_1 = this.$.seconds.eq(0),
                    $sec_2 = this.$.seconds.eq(1);

                this.countdown_interval = setInterval(function() {

                    if (that.total_seconds > 0) {

                        --that.values.seconds;

                        if (that.values.minutes >= 0 && that.values.seconds < 0) {

                            that.values.seconds = 59;
                            --that.values.minutes;
                        }

                        if (that.values.hours >= 0 && that.values.minutes < 0) {

                            that.values.minutes = 59;
                            --that.values.hours;
                        }

                        // Update DOM values
                        // Hours
                        that.checkHour(that.values.hours, $hour_1, $hour_2);

                        // Minutes
                        that.checkHour(that.values.minutes, $min_1, $min_2);

                        // Seconds
                        that.checkHour(that.values.seconds, $sec_1, $sec_2);

                        --that.total_seconds;
                    } else {
                        clearInterval(that.countdown_interval);
                    }
                }, 1000);
            },

            animateFigure: function($el, value) {
                var that = this,
                    $top = $el.find('.top'),
                    $bottom = $el.find('.bottom'),
                    $back_top = $el.find('.top-back'),
                    $back_bottom = $el.find('.bottom-back');

                // Before we begin, change the back value
                $back_top.find('span').html(value);

                // Also change the back bottom value
                $back_bottom.find('span').html(value);

                // Then animate
                TweenMax.to($top, 0.8, {
                    rotationX: '-180deg',
                    transformPerspective: 300,
                    ease: Quart.easeOut,
                    onComplete: function() {

                        $top.html(value);

                        $bottom.html(value);

                        TweenMax.set($top, {
                            rotationX: 0
                        });
                    }
                });

                TweenMax.to($back_top, 0.8, {
                    rotationX: 0,
                    transformPerspective: 300,
                    ease: Quart.easeOut,
                    clearProps: 'all'
                });
            },

            checkHour: function(value, $el_1, $el_2) {

                var val_1 = value.toString().charAt(0),
                    val_2 = value.toString().charAt(1),
                    fig_1_value = $el_1.find('.top').html(),
                    fig_2_value = $el_2.find('.top').html();

                if (value >= 10) {

                    // Animate only if the figure has changed
                    if (fig_1_value !== val_1) this.animateFigure($el_1, val_1);
                    if (fig_2_value !== val_2) this.animateFigure($el_2, val_2);
                } else {

                    // If we are under 10, replace first figure with 0
                    if (fig_1_value !== '0') this.animateFigure($el_1, 0);
                    if (fig_2_value !== val_1) this.animateFigure($el_2, val_1);
                }
            }
        };

        // Let's go !
        Countdown.init();
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
