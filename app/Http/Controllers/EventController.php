<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function Events() {
        
        return view('events');
    }

    public function Event($id) {

        return view ('event');
    }

    public function ShowCreate() {

        return view ('create.event');
    }

    public function CreateEvent(Request $request) {

        return Event(1);
    }
}
