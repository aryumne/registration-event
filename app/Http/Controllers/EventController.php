<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    public function index() {
        $events = Event::all();
        return view('admin.pages.events', [
            'events' => $events
        ]);
    }
    
    public function store(Request $request) {
        try {
            $validator = Validator::make($request->all(), [
                'event_name' => 'required',
            ]);

            if ($validator->fails()) throw new Exception(json_encode($validator->errors()));
            $event = Event::create($request->all());

            if (!$event) throw new Exception('Something went wrong on creating the event');
            logStore(CREATE_EVENT, $event, STATUS_SUCCESS);
            return back()->with('success', 'Event created successfully');
        } catch (Exception $e) {
            logStore(CREATE_EVENT, $e->getMessage(), STATUS_ERROR);
            return back()->withInput()->with('error', 'Failed to store event');
        }
    }
}
