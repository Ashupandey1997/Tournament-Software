<?php

namespace App\Http\Controllers;
use App\Http\Controllers\TornamentController;

use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    use App\Models\Event;
use App\Models\Division;
use App\Models\Category;
use App\Models\Competitor;
use App\Models\RegistrationForm;

    public function index()
    {
        $events = Event::all();
        return view('events.index', compact('events'));
    }

    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }

    public function division(Event $event)
    {
        $divisions = Division::where('event_id', $event->id)->get();
        return view('events.division', compact('event', 'divisions'));
    }

    public function categories(Event $event)
    {
        $categories = Category::where('event_id', $event->id)->get();
        return view('events.categories', compact('event', 'categories'));
    }


    
}



