@extends('admin.dashboard')
@section('content')
    <h1 class="my-4">Dashboard</h1>
    <!-- Illustration dashboard card example-->
    <div class="row">
        <div class="col-12">
            <div class="card card-waves mb-4">
                <div class="card-body p-5">
                    <div class="row align-items-center justify-content-between">
                        <div class="col">
                            <h2 class="text-primary">Welcome back, your dashboard is ready!</h2>
                            <p class="text-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Sapiente corrupti molestiae aliquam odio, possimus rerum esse
                                molestias similique aspernatur necessitatibus iusto consequatur qui
                                impedit cumque ipsum? Veniam quam qui atque!</p>
                            <a class="btn btn-primary p-3" href="{{ route('users.index') }}">
                                Show my participants
                                <i class="ms-1" data-feather="arrow-right"></i>
                            </a>
                        </div>
                        <div class="col d-none d-lg-block mt-xxl-n4"><img class="img-fluid px-xl-4 mt-xxl-n5"
                                src="{{ asset('admin-assets/assets/img/statistics.svg') }}" /></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
