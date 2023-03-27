<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>Register</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">

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
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="assets/css/master_layout.css">
</head>

<body>
    {!! Form::open(array('url' => route("register"))) !!}
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel">
                    <p class="text-md-left font-weight-bold">Sign Up For Join The Event</p>
                    <form id="contact-form" action="register" method="post">

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="FirstName"></label>
                                <input name="firstName" required name type="text" class="form-control" id="FirstName" placeholder="First Fame">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="LastName"></label>
                                <input name="lastName" required type="text" class="form-control" id="LastName" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Email"></label>
                            <input name="email" required type="email" class="form-control" id="Email" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <label for="Phone"></label>
                            <input name="phone" required type="tel" class="form-control" id="Phone" placeholder="Mobile Phone Number" pattern="[0-9]{10,12}">
                        </div>
                        <div class="form-group">
                            <label for="Address"></label>
                            <input name="address" required type="text" class="form-control" id="Address" placeholder="Address">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="Job"></label>
                                <input name="jobTitle" required type="text" class="form-control" id="Job" placeholder="Job Title">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Company"></label>
                                <input name="company" required type="text" class="form-control" id="Company" placeholder="Company">
                            </div>
                        </div>

                        <div class="mt-3">
                            <p class="text-sm-left font-weight-bold">Apakah Sudah Menjadi Seller di Blibli</p>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputQuestion1"></label>
                                <select name="question1" required id="inputQuestion1" class="form-control">
                                    <option selected value=""></option>
                                    <option value=1>Ya</option>
                                    <option value=0>Belum</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="InputCompany1"></label>
                                <input hidden type="text" class="form-control" id="InputCompany1" placeholder="Company">
                            </div>
                        </div>

                        <span id="question1" style="display: none;">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="InputNamaToko"></label>
                                    <input name="namaToko" type="text" class="form-control" id="InputNamaToko" placeholder="Nama Toko di Blibli">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="InputSellerId"></label>
                                    <input name="sellerID" type="text" class="form-control" id="InputSellerId" placeholder="No Seller ID di Blibli">
                                </div>
                            </div>
                        </span>

                        <span id="question2" style="display: none;">
                            <div class="mt-3">
                                <p class="text-sm-left font-weight-bold">Apakah Sudah Berjualan di Platform Ecommerce Lain ?</p>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputQuestion2"></label>
                                    <select name="question2" id="inputQuestion2" class="form-control">
                                        <option selected value=""></option>
                                        <option value=1>Ya</option>
                                        <option value=0>Belum</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="InputCompany1"></label>
                                    <input hidden type="text" class="form-control" id="InputCompany1" placeholder="Company">
                                </div>
                            </div>

                            <div class="mt-3">
                                <p class="text-sm-left font-weight-bold">Saat ini Mitra Ecommerce Usaha Bapak/Ibu</p>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputQuestion3"></label>
                                    <select name="question3" id="inputQuestion3" class="form-control">
                                        <option selected value=""></option>
                                        <option value=1>Ya</option>
                                        <option value=0>Belum</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="InputCompany1"></label>
                                    <input hidden type="text" class="form-control" id="InputCompany1" placeholder="Company">
                                </div>
                            </div>
                        </span>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}

    <script>
        var select = document.getElementById('inputQuestion1');
        var span1 = document.getElementById('question1');
        var span2 = document.getElementById('question2');
        var namaToko = document.getElementById('InputNamaToko');
        var sellerId = document.getElementById('InputSellerId');
        var select2 = document.getElementById('inputQuestion2');
        var select3 = document.getElementById('inputQuestion3');
        select.addEventListener('change', (event) => {
            var value = select.options[select.selectedIndex].value;
            if (value == 1) {
                span1.style.display = "block";
                span2.style.display = "none";
                namaToko.required = true
                sellerId.required = true
                select2.required = false
                select3.required = false
                select2.selectedIndex = -1
                select3.selectedIndex = -1
            } else if (value == 0 && value != "") {
                span1.style.display = "none";
                span2.style.display = "block";
                namaToko.required = false
                sellerId.required = false
                select2.required = true
                select3.required = true
                namaToko.value = ""
                sellerId.value = ""
            } else {
                span1.style.display = "none";
                span2.style.display = "none";
                namaToko.required = false
                sellerId.required = false
                select2.required = false
                select3.required = false
                select2.selectedIndex = -1
                select3.selectedIndex = -1
            }
        });
    </script>
</body>


</html>