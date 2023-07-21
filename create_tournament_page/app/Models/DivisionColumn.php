<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DivisionColumn extends Model
{
    public function addParameter(Event $event, Request $request)
    {
        $parameter = new Parameter();
        $parameter->event_id = $event->id;
        $parameter->name = $request->input('name');
        $parameter->order = Parameter::where('event_id', $event->id)->count() + 1;
        $parameter->save();
        return redirect()->route('events.division', $event->id);
    }

}
