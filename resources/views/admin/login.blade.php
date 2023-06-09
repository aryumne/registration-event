<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login</title>
    <link href="{{ asset('admin-assets/css/styles.css') }}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            min-height: 100vh;
        }
    </style>
</head>

<body class="bg-dark">
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card shadow-lg border-0 ">
                        <div class="card-header">
                            <h5 class="text-center font-weight-light my-3">Sign in as administrator</h5>
                            @if (session('error'))
                                <div class="alert alert-danger my-0" role="alert">
                                    {{ session('error') }}
                                </div>
                            @endif
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('accounts.login') }}">
                                @csrf
                                <div class="form-floating mb-4">
                                    <input class="form-control" id="inputUsername" type="text"
                                        placeholder="admineveny" name="username" />
                                    <label for="inputUsername">Username</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputPassword" type="password"
                                        placeholder="Password" name="password" />
                                    <label for="inputPassword">Password</label>
                                </div>
                                <div class="d-flex align-items-center justify-content-between    mt-4 mb-0">
                                    <a class="small" href="password.html">Forgot Password?</a>
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ asset('admin-assets/js/scripts.js') }}"></script>
</body>

</html>
