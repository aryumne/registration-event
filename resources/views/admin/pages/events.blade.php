@extends('admin.dashboard')
@section('content')
    <h1 class="my-4">Events</h1>
    <div class="row">
        <div class="col-12">
            <a class="btn btn-warning mb-3" href="#">New Event</a>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Events List
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th></th>
                        <th>Event Name</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th></th>
                        <th>Event Name</th>
                        <th>action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($events as $event)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $event->event_name }}</td>
                            <td>{{ 'action' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection