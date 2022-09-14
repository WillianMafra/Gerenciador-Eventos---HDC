<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\User;

class GerenciadorEventos extends Controller
{
// Function to acess the homepage

    public function index(){

        $search = request('search');

        if($search) {

            $events = Event::where([
                ['title', 'like', '%'.$search.'%']
            ])->get();}

            else {
            $events = Event::all();
        }
        
        return view('welcome', ['events'=> $events, 'search' => $search]);
    }
// Function to create a event

    public function create(){
        return view('events.create');
    }
// Function to save the data that came from user in the database

    public function store(Request $request) {
        $event = new Event;

        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;
        $event->items = $request->items;
        $event->date = $request->date;

        // Image Upload

        $requestImage = $request->image;
        $extension = $requestImage->extension();
        $imageName = md5($requestImage->getClientOriginalName() . strtotime('now'));
        $requestImage->move(public_path('img/events'), $imageName);

        $event->image = $imageName;

        $user = auth()->user();
        $event->user_id = $user->id;

        $event->save();

        return redirect('/')->with('msg', 'Evento criado com sucesso!');
    }
// Product by id

    public function show($id) {
        $event = Event::findOrFail($id);
        $eventOwner = User::where('id', $event->user_id)->first()->toArray();

        return view('events.show', ['event' => $event, 'eventOwner' => $eventOwner]);

    }
// Function to acess the dashboard

    public function dashboard() {
        $user = auth()->user();

        $events = $user->events;

        return view('events.dashboard', ['events' => $events]);

    }
// Function to delete some event

    public function destroy($id) {
        Event::findOrFail($id)->delete();
        
        return redirect('/dashboard')->with('msg', 'Evento excluído com sucesso!');
    }
}


