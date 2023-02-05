<?php

namespace App\Http\Controllers;

use App\Models\club;
use App\Models\player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{

    public function tes()
    {
        $data=player::all();
        return view('player.players',['data'=> $data]);
    }

    public function create($id)
    {
        $club = club::find($id);
        return view('player.create',['club' => $club]);
    }


    public function save(Request $request)
    {
        
        $data = player::Find($request->id);
    }    
}
