@extends('admin.dashboard')
@section('content')
    <h1 class="my-4">Accounts</h1>
    <div class="row">
        <div class="col-12">
            <!-- Button trigger modal -->
            <button class="btn btn-primary mb-3" type="button" data-bs-toggle="modal" data-bs-target="#addAccountModal">New
                Account</button>
            @if (session('success'))
                <div class="alert alert-info mb-2" role="alert">
                    {{ session('success') }}
                </div>
            @elseif(session('error'))
                <div class="alert alert-danger mb-2" role="alert">
                    {{ session('error') }}
                </div>
            @endif
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Accounts List
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
                            <td>
                                {!! $account->is_active ?
                                '<span class="badge bg-success">Active</span>' : '<span class="badge bg-danger">Disable</span>'
                                !!}
                            </td>
                            <td>
                                <a class="btn btn-warning" href="{{ route('accounts.setting', $account->id) }}">
                                    Edit
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- Modal Add Account -->
    <div class="modal fade" id="addAccountModal" tabindex="-1" role="dialog" aria-labelledby="addAccountModalTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addAccountModalTitle">Register Account</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="{{ route('accounts.store') }}">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1">Name</label>
                            <input class="form-control" id="accountName" type="text" name="name"
                                value="{{ old('name') }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1">Username</label>
                            <input class="form-control" id="userName" type="text" name="username"
                                value="{{ old('username') }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1">Email</label>
                            <input class="form-control" id="userEmail" type="email" name="email"
                                value="{{ old('email') }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1">Password</label>
                            <div class="row">
                                <div class="col-md-9 col-8">
                                    <input class="form-control" id="password" type="text" name="password" required>
                                </div>
                                <div class="col-md-3 col-4">
                                    <button type="button" class="btn btn-success" id="generate">Generate</button>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="roleID">Role</label>
                            <select class="form-control" id="roleID" name="role_id" required>
                                <option value="">-- Choose Role --</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}"
                                        {{ old('role_id') == $role->id ? 'selected' : null }}>
                                        {{ $role->role_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="eventID">Event</label>
                            <select class="form-control" id="eventID" name="event_id" required>
                                <option value="">-- Choose Event --</option>
                                @foreach ($events as $event)
                                    <option value="{{ $event->id }}"
                                        {{ old('event_id') == $event->id ? 'selected' : null }}>
                                        {{ $event->event_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-primary" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div> <!-- End Modal Add Account -->

    <script type="text/javascript">
        $("#generate").click(function() {
           let randomPass =  Math.random().toString(36).slice(-8);
           $("#password").val(randomPass);
        });
    </script>
@endsection
