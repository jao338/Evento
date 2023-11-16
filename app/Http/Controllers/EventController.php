<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;

class EventController extends Controller
{
    
    public function index(){

        $search = request('search');

        if($search){

            $events = Event::where([
                ['title', 'like', '%'.$search.'%']
            ])->orWhere([
                ['description', 'like', '%'.$search.'%']
            ])->get();

        }else{

            $events = Event::all();

        }

        return view('welcome', ['events' => $events, 'search' => $search]);

    }

    public function create(){

        return view('events/create');

    }

    public function store(Request $request){
        
        $event = new Event();

        $event->title = $request->title;
        $event->date = $request->date;
        $event->description = $request->description;
        $event->private = $request->private;
        $event->city = $request->city;
        $event->items = $request->items;

        if($request->hasFile('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/events'), $imageName);

            $event->image = $imageName;

        }

        $user = auth()->user();
        $event->user_id = $user->id;

        $event->save(); //  Salva no banco de dados

        return redirect('/')->with('msg', 'Evento criado com sucesso!');   //  Redireciona para a home com uma flash message

    }

    public function show($id){

        $event = Event::findOrFail($id);

        // Busca no banco as informações do usuário com base na chave estrangeira da tabela events
        $eventOwner = User::where('id', $event->user->id)->first()->toArray();

        return view('events/show', ['event' => $event, 'eventOwner' => $eventOwner]);

    }

    public function dashboard(){

        $user = auth()->user();

        $events = $user->events;

        return view('events/dashboard', ['events' => $events]);

    }

}
