@extends('admin.dashboard')
@section('content')
    <h1 class="my-4">Administrator Accounts</h1>
    <div class="row">
        <div class="col-12">
            <a class="btn btn-warning mb-3" href="#">New Account</a>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Account List
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th></th>
                        <th>username</th>
                        <th>Name</th>
                        <th>email</th>
                        <th>Status</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th></th>
                        <th>username</th>
                        <th>Name</th>
                        <th>email</th>
                        <th>Status</th>
                        <th>action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($accounts as $account)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $account->username }}</td>
                            <td>{{ $account->name }}</td>
                            <td>{{ $account->email }}</td>
                            <td>{{ $account->is_active }}</td>
                            <td>{{ 'action' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection