<?php

namespace App\Http\Controllers;
use App\Company;
use App\Event;
use App\User;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use Input;

class EventController extends Controller
{
    public function Events() {
        $private_events = null;
        
        if(!is_null(Auth::user()->company_id)){
            $company = Company::find(Auth::user()->company_id);
            $private_events = Event::where('company_id', $company->id);
        }

        if($private_events != null) {
            $results = Event::where('private', false)
                            ->union($private_events)
                            ->orderBy('start_date', 'desc')
                            ->get();

            $paginate = 8;
            $page = Paginator::resolveCurrentPage();

            $offSet = ($page * $paginate) - $paginate;  
            $currentPageItems = $results->slice(($page - 1) * $paginate, $paginate);
            $results = new \Illuminate\Pagination\LengthAwarePaginator($currentPageItems, count($results), $paginate);

            return view('events.events', compact('results'));
            
        }
        $results = $results = Event::where('private', false)
                                    ->orderBy('start_date', 'desc')
                                    ->paginate(8);

        return view('events.events', compact('results'));
        


    }

    public function ShowCreate() {
        if(is_null(Auth::user()->company_id) || Auth::user()->company_admin == false){
            return redirect()->action('UserController@Profile')->withErrors('You need to join a company before creating an event!');
        }
        return view('events.create');
    }

    public function CreateEvent(Request $request) {
        $this->validate($request, [
          'name' => 'required|string|max:255',
          'start_date' => 'required|string|max:255',
          'end_date' => 'required|string|max:255',
          'description' => 'required|string|max:255',
          'image' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $company = Company::find(Auth::user()->company_id);
        $image = '';
        if($request->file('image') != ""){
          $filename = uniqid().'.'.$request->file('image')->getClientOriginalName();
          Image::make($request->file('image'))->save(public_path().'/images/event/'.$filename);
          $image = config('app.url').'/images/event/'.$filename;
        }

        $private = false;
        if($request->input('private') == 'private'){
            $private = true;
        }
        $event = Event::create([
            'name' => $request->input('name'),
            'start_date' => new Carbon($request->input('start_date'), 'America/Chicago'),
            'end_date' => new Carbon($request->input('end_date'), 'America/Chicago'),
            'description' => $request->input('description'),
            'private' => $private,
            'image' => $image,
            'created_by' => Auth::user()->id,
            'company_id' => $company->id
        ]);

        return redirect()->action('EventController@Events')->with('success', 'Your event has been created!');
    }
}
