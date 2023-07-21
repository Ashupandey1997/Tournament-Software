<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Division extends Model{
    public function showDivision(Event $event)
    {
        $divisions = Division::where('event_id', $event->id)->get();
        $parameters = Parameter::where('event_id', $event->id)->orderBy('order')->get();
        return view('events.division_page', compact('event', 'divisions', 'parameters'));
    }
}

