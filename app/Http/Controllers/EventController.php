<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function Events() {
        $events = Events::get();
        return view('events');
    }

    public function Event($id) {
        $event = Event::where('id', $id)->first();
        return view ('event');
    }

    public function ShowCreate() {
        //need auth
        return view ('create.event');
    }

    public function CreateEvent(Request $request) {
        $companies = Company::where('id', $id)->first();
        $event = new Event();
        $event->name = $request->input("name");
        $event->start_date = $request->input("start_date");
        $event->end_date = $request->input("end_date");
        $event->description = $request->input("description");
        $event->company()->associate($companies);
        $event->user()->associate(Auth::$user);
        $event->save();
        return Event(1);
    }
}
