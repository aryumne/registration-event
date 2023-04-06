@extends('admin.dashboard')
@section('content')
    <h1 class="my-4">Participants</h1>
    <div class="row">
        <div class="col-12">
            <a class="btn btn-warning mb-3" href="{{ route('users.export', 'asdasd') }}">Export Data</a>
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
                            <td>{{ $user->first_name.' '.$user->last_name }}</td>
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
