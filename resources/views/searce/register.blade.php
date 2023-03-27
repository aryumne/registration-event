<!DOCTYPE html>
<!-- saved from url=(0034)https://seller.blibli.com/register -->
<html lang="id">

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

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-21718848-28"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-21718848-28');
    </script>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="expires" content="Sun, 01 Jan 2014 00:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" />

    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>Blibli Seller Center - Jual Online Mudah, Aman &amp; Nyaman</title>

    <link rel="stylesheet" href="assets/blibli/custom_bootstrap.css?v=.date(YmdHis)">

    <link rel="stylesheet" href="assets/css/default.css">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="assets/css/style.css?v=.date(YmdHisi)">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css?v=.date(YmdHisi)">

    <link href="assets/blibli/index.css?v=.date(YmdHis)" rel="stylesheet">

    <script type="text/javascript" async="" src="assets/blibli/index.js"></script>
</head>

<body>
    <noscript>Please use the latest browser and enable javascript</noscript>
    @if (session()->has('error'))
        <div class="alert-bs alert-warning alert-dismissible fade show" role="alert">
            {{ session()->get('error') }}
        </div>
    @endif
    <div>
        <div data-v-40aa9884="" class="header">
            <div data-v-40aa9884="" class="row row--flex header__block">
                <div data-v-40aa9884="" class="application">
                    <div data-v-40aa9884=""><a data-v-40aa9884="" href="/" class="blibli-logo"><img
                                data-v-40aa9884="" src="assets/images/navbrand.png" alt="" class="logo-nav"></a>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div>
                <div>
                    
                    <div data-v-b8090454="" id="toast" class="container"></div>
                    <div data-v-a08f6b60="" data-v-460bcf33="" class="register">
                        <div data-v-a08f6b60="" class="register__img"><img style="visibility: hidden;" id="register_img"
                                data-v-a08f6b60=""></div>
                        <div data-v-a08f6b60="" class="register__content">
                            <div data-v-1f0a274c="" data-v-460bcf33="" class="form" data-v-a08f6b60="">
                                <h1 data-v-1f0a274c="" class="form__title">
                                    Please Fill Your Data on Registration Form
                                </h1>

                                {!! Form::open(['url' => route('register')]) !!}
                                <form id="contact-form" action="register" method="post">
                                    <div data-v-1f0a274c="" class="form__wrapper mt-5">
                                        <div data-v-1f0a274c="" class="form__field">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <div data-v-bfe2d22e="" data-v-1f0a274c="" class="blu-field">
                                                        <input value="{{ old('first_name') }}" data-v-1f0a274c=""
                                                            data-v-bfe2d22e="" name="first_name" required
                                                            type="text" class="form-control form__input"
                                                            id="firstName">
                                                        <label data-v-1f0a274c="" data-v-bfe2d22e=""
                                                            for="first_name">First Name</label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <div data-v-bfe2d22e="" data-v-1f0a274c="" class="blu-field">
                                                        <input value="{{ old('last_name') }}" data-v-1f0a274c=""
                                                            data-v-bfe2d22e="" name="last_name" required type="text"
                                                            class="form-control form__input" id="lastName">
                                                        <label data-v-1f0a274c="" data-v-bfe2d22e=""
                                                            for="last_name">Last
                                                            Name</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-v-1f0a274c="" class="form__field">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <div data-v-bfe2d22e="" data-v-1f0a274c="" class="blu-field">
                                                        <input value="{{ old('job_title') }}" data-v-1f0a274c=""
                                                            data-v-bfe2d22e="" name="job_title" required
                                                            type="text" class="form-control form__input"
                                                            id="Job">
                                                        <label data-v-1f0a274c="" data-v-bfe2d22e=""
                                                            for="Job">Job Title</label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <div data-v-bfe2d22e="" data-v-1f0a274c="" class="blu-field">
                                                        <input value="{{ old('company') }}" data-v-1f0a274c=""
                                                            data-v-bfe2d22e="" name="company" required type="text"
                                                            class="form-control form__input" id="Company">
                                                        <label data-v-1f0a274c="" data-v-bfe2d22e=""
                                                            for="Company">Company Name</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-v-1f0a274c="" class="form__field">
                                            <div data-v-bfe2d22e="" data-v-1f0a274c="" class="blu-field">
                                                <div class="form-group">
                                                    <input value="{{ old('email') }}" data-v-1f0a274c=""
                                                        data-v-bfe2d22e="" name="email" required type="email"
                                                        class="form-control form__input" id="Email">
                                                    <label data-v-1f0a274c="" data-v-bfe2d22e=""
                                                        for="Email">Email</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-v-1f0a274c="" class="form__field">
                                            <div data-v-bfe2d22e="" data-v-1f0a274c="" class="blu-field">
                                                <div class="form-group">
                                                    <input value="{{ old('phone') }}" data-v-1f0a274c=""
                                                        data-v-bfe2d22e="" name="phone" required type="tel"
                                                        class="form-control form__input" id="Phone"
                                                        pattern="[0-9]{0,30}">
                                                    <label data-v-1f0a274c="" data-v-bfe2d22e=""
                                                        for="Phone">Mobile Phone Number</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-v-1f0a274c="" class="form__field">
                                        <button data-v-626eb588="" data-v-1f0a274c="" type="submit"
                                            class="blu-btn form__button b-info mt-5" id="submit-registration">
                                            <div style="background-color: #efdc02 !important;font-weight: 600 !important;"
                                                data-v-58abcc1b="" data-v-626eb588="" class="blu-ripple">
                                                Daftar
                                            </div>
                                        </button>
                                    </div>
                                </form>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <link rel="stylesheet" as="style" type="text/css"
                        href="assets/blibli/index(1).css?v=.date(YmdHis)">
                    <script src="assets/blibli/index(2).js" type="text/javascript"></script>
                </div>
            </div>
        </div>
    </div>
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
                    <div class="row p-3 d-flex justify-content-center">
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


    <!--====== Jquery js ======-->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js"></script>

    <script>
        let img_responsive = (x) => {
            let register_img = document.getElementById('register_img');

            if (x.matches) { // If media query matches
                register_img.src = "assets/images/banner-home-mobile.png"
            } else {
                register_img.src = ""
            }
        }

        var x = window.matchMedia("(max-width: 768px)")
        img_responsive(x) // Call listener function at run time
        x.addListener(img_responsive) // Attach listener function on state changes
    </script>
    <script>
        var firstName = document.getElementById('firstName');
        var lastName = document.getElementById('lastName');
        var email = document.getElementById('Email');
        var phone = document.getElementById('Phone');
        var job = document.getElementById('Job');
        var company = document.getElementById('Company');

        firstName.addEventListener('change', () => {
            if (firstName.value != "") firstName.parentElement.classList.add("has-value");
            else firstName.parentElement.classList.remove("has-value");
        })

        lastName.addEventListener('change', () => {
            if (lastName.value != "") lastName.parentElement.classList.add("has-value");
            else lastName.parentElement.classList.remove("has-value");
        })

        email.addEventListener('change', () => {
            if (email.value != "") email.parentElement.parentElement.classList.add("has-value");
            else email.parentElement.parentElement.classList.remove("has-value");
        })

        phone.addEventListener('change', () => {
            if (phone.value != "") phone.parentElement.parentElement.classList.add("has-value");
            else phone.parentElement.parentElement.classList.remove("has-value");
        })
        
        job.addEventListener('change', () => {
            if (job.value != "") job.parentElement.classList.add("has-value");
            else job.parentElement.classList.remove("has-value");
        })

        company.addEventListener('change', () => {
            if (company.value != "") company.parentElement.classList.add("has-value");
            else company.parentElement.classList.remove("has-value");
        })
    </script>
</body>

</html>
