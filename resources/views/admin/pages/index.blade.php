@extends('admin.dashboard')
@section('content')
    <h1 class="mt-4">Hi, {!! Auth::user()->name !!}</h1>
    <p class="text-title text-grey">Welcome back, here is your participants!</p>
    <div class="row">
        <div class="col-9">
            <form action="{{ route('users.export') }}" method="POST">
                @csrf
                <button class="btn btn-warning mb-3" type="submit">Export Data</button>
            </form>
        </div>
        <div class="col-3 pe-4 text-end">
            <h4>Total: {{ count($users) }}</h4>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Participants list
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Job</th>
                        <th>Company</th>
                        <th>Email</th>
                        <th>Phone number</th>
                        <th>Event</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Job</th>
                        <th>Company</th>
                        <th>Email</th>
                        <th>Phone number</th>
                        <th>Event</th>
                        <th>action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->first_name . ' ' . $user->last_name }}</td>
                            <td>{{ $user->job_title }}</td>
                            <td>{{ $user->company }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->subqis }}</td>
                            <td>System Architect</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
