<?php

namespace App\Http\Controllers;
// use App\Http\Controllers\EventController;

use Illuminate\Http\Request;

class TournamentController extends Controller
{
    
    // app/Http/Controllers/TournamentController.php


    public function showForm()
    {
        $request = Request::capture();
        return view('tournament',compact('request'));
    }

    public function createTournament(Request $request)
    {
        $insertData = DB::table('tournament')->insert(array(
            'name'=>$request->name,
            'type_of_sports'=>$request->type_of_sports,
            'date_of_tournament'=>$request->date_of_tournament,
            'template'=>$request->template,
            'event_types'=>$request->event_types
        ));
    
        return response()->json(['message'=>'Tournament created successfully!', 'data'=> $insertData], 200);
 }
}

