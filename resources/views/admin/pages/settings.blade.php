@extends('admin.dashboard')
@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-10 col-12">
            <div class="row">
                <h1 class="my-4">Edit Profile</h1>
                <div class="col-12">
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
                    Account
                </div>
                <form method="POST" action="{{ route('accounts.update', $account->id) }}">
                    @csrf
                    @method('PATCH')
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1">Name</label>
                            <input class="form-control" id="accountName" type="text" name="name"
                                value="{{ $account->name }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1">Username</label>
                            <input class="form-control" id="userName" type="text" name="username"
                                value="{{ $account->username }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1">Email</label>
                            <input class="form-control" id="userEmail" type="email" name="email"
                                value="{{ $account->email }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1">Password</label>
                            <div class="row">
                                <div class="col-md-9 col-8">
                                    <input class="form-control" id="password" type="text" name="password">
                                </div>
                                <div class="col-md-3 col-4 pe-4">
                                    <div class="row">
                                        <button type="button" class="btn btn-success" id="generate">Generate</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="roleID">Role</label>
                            <select class="form-control" id="roleID" name="role_id" required>
                                <option value="">-- Choose Role --</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}"
                                        {{ $account->role_id == $role->id ? 'selected' : null }}>
                                        {{ $role->role_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="eventID">Event</label>
                            <select class="form-control" id="eventID" name="event_id" {{ Auth::user()->role->role_level == 2 ?? 'required'}}>
                                @foreach ($events as $event)
                                    <option value="">-- Choose Event --</option>
                                    <option value="{{ $event->id }}"
                                        {{ $account->event_id == $event->id ? 'selected' : null }}>
                                        {{ $event->event_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        @if (Auth::user()->role->role_level == 1)
                        <div class="mb-3">
                            <label for="isActice">Status</label>
                            <select class="form-control" id="isActice" name="is_active" required>
                                <option value="">-- Choose status --</option>
                                    <option value="1"
                                        {{ $account->is_active == 1 ? 'selected' : null }}>
                                        {!! 'Active' !!}
                                    </option>
                                    <option value="0"
                                        {{ $account->is_active == 0 ? 'selected' : null }}>
                                        {!! 'Non active' !!}
                                    </option>
                            </select>
                        </div>
                        @endif
                    </div>
                    <div class="card-footer text-end">
                        <button class="btn btn-primary" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $("#generate").click(function() {
            let randomPass = Math.random().toString(36).slice(-8);
            $("#password").val(randomPass);
        });
    </script>
@endsection
