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
    <title>Blibli Partner Gathering</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="/">
                            <img class="logo-nav" src="assets/images/logo.png?v=.date(YmdHis)" alt="Logo">
                        </a>

                        <div style="visibility: hidden;" class="collapse navbar-collapse sub-menu-bar" id="navbarTwo">
                            <ul class="navbar-nav m-auto">
                                <!-- <li class="nav-item active"><a class="page-scroll" href="#home">Home</a></li> -->
                                <li class="nav-item"><a class="page-scroll" href="#home">About</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#contact">Road To Event</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#agenda">Agenda</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#speakers">Speakers</a></li>
                            </ul>
                        </div>

                        <div>
                            <ul>
                                <li>
                                    <a id="reg-button" class="solid" href="{{ route('reportExport', ['lastLogin'=>$lastLogin]) }}">Export</a>
                                </li>
                            </ul>
                        </div>

                        @if($lastLogin)
                        <div style="margin-left: 1rem;">
                            <ul>
                                <li>
                                    <a id="reg-button" class="solid" href="/last-login">Last Login</a>
                                </li>
                            </ul>
                        </div>
                        @else
                        <div style="margin-left: 1rem;">
                            <ul>
                                <li>
                                    <a id="reg-button" class="solid" href="/report">Back</a>
                                </li>
                            </ul>
                        </div>
                        @endif
                    </nav> <!-- navbar -->

                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>


    <section id="agenda" class="contact-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-30">
                        <h3 class="title">Report Event</h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <h3>Total : {{ $user->total() }} </h3>
                    <div class="contact-map mt-30" style="overflow-x:auto;">
                        <table id="agenda-table" class="table table-borderless">
                            <tr>
                                <th>#</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Email</th>
                                <th>Last Login</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Job Title</th>
                                <th>Company</th>
                                <th>Nama Toko</th>
                                <th>ID Toko</th>
                                <th>Question 1</th>
                                <th>Question 2</th>
                                <th>Question 3</th>
                                <th>Created At</th>
                            </tr>

                            @php $i = ($user->currentpage()-1)* $user->perpage() + 1;@endphp
                            @foreach($user as $p)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{ $p->first_name }}</td>
                                <td>{{ $p->last_name }}</td>
                                <td>{{ $p->email }}</td>
                                <td>{{ $p->last_login }}</td>
                                <td>{{ $p->phone }}</td>
                                <td>{{ $p->address }}</td>
                                <td>{{ $p->job_title }}</td>
                                <td>{{ $p->company }}</td>
                                <td>{{ $p->question1_nama_toko }}</td>
                                <td>{{ $p->question1_id_toko }}</td>
                                <td>{{ $p->question1 }}</td>
                                <td>{{ $p->question2 }}</td>
                                <td>{{ $p->question3 }}</td>
                                <td>{{ $p->created_at }}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div> <!-- row -->
                    {{ $user->links() }}
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
                interval: 2500
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


</body>

</html>