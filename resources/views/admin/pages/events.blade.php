@extends('admin.dashboard')
@section('content')
    <h1 class="my-4">Events</h1>
    <div class="row">
        <div class="col-12">
            <!-- Button trigger modal -->
            <button class="btn btn-primary mb-3" type="button" data-bs-toggle="modal" data-bs-target="#addEventModal">New
                Event</button>
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
            Events List
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th></th>
                        <th>Event Name</th>
                        <th>Company</th>
                        <th>Event Date</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th></th>
                        <th>Event Name</th>
                        <th>Company</th>
                        <th>Event Date</th>
                        <th>action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($events as $event)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $event->event_name }}</td>
                            <td>{{ $event->company }}</td>
                            <td>{{ $event->event_date }}</td>
                            <td>
                                <button class="btn btn-warning" type="button" data-bs-toggle="modal"
                                    data-bs-target="#editEventModal{{$event->id}}">
                                    Edit
                                </button>
                                <!-- Modal Add Event -->
                                <div class="modal fade" id="editEventModal{{$event->id}}" tabindex="-1" role="dialog"
                                    aria-labelledby="addEventModalTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="addEventModalTitle">Event Form</h5>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form method="POST" action="{{ route('events.update', $event->id) }}">
                                                @csrf
                                                @method('PATCH')
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1">Event name</label>
                                                        <input class="form-control" id="eventName" type="text"
                                                            name="event_name" value="{{$event->event_name}}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1">Company</label>
                                                        <input class="form-control" id="company" type="text"
                                                            name="company" value="{{$event->company}}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1">Event date</label>
                                                        <input class="form-control" id="eventDate" type="date"
                                                            name="event_date" value="{{$event->event_date}}" required>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" type="button"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button class="btn btn-primary" type="submit">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div> <!-- End Modal Add Event -->
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- Modal Add Event -->
    <div class="modal fade" id="addEventModal" tabindex="-1" role="dialog" aria-labelledby="addEventModalTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addEventModalTitle">Event Form</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="{{ route('events.store') }}">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1">Event name</label>
                            <input class="form-control" id="eventName" type="text" name="event_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1">Company</label>
                            <input class="form-control" id="company" type="text" name="company" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1">Event date</label>
                            <input class="form-control" id="eventDate" type="date" name="event_date" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-primary" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div> <!-- End Modal Add Event -->
@endsection
