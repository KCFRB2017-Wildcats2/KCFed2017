<?php

namespace App\Http\Controllers;

use App\User;
use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function Events() {
        $results = Event::paginate(8);

        return view('events.events', compact('results'));
    }

    public function Event($id) {
        $event = Event::where('id', $id)->first();
        return view ('events.event', compact('event'));
    }

    public function ShowCreate() {
        //need auth
        return view ('events.create');
    }

    public function CreateEvent(Request $request) {

        $this->validate($request, [
          'name' => 'required|string|max:255',
          'start_date' => 'required|string|max:255',
          'end_date' => 'required|string|max:255',
          'description' => 'max:255'
        ]);

        $companies = Company::where('id', $id)->first();
        $event = new Event();
        $event->name = $request->input("name");
        $event->start_date = $request->input("start_date");
        $event->end_date = $request->input("end_date");
        $event->description = $request->input("description");
        $event->company()->associate($companies);
        $event->user()->associate(Auth::$user);
        $event->save();
        return Event($event->id);
    }
}
