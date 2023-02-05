<?php

namespace App\Http\Controllers;

use App\Models\club;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function tes()
    {
        $data=club::all();
        return view('club.clubs',['data'=> $data]);
    }
    public function save(Request $request)
    {
        $data = new club;
        if($request->hasFile('logo')){
            $request->file('logo')->move('img/',$request->file('logo')->getClientOriginalName());
            $data->logo=$request->file('logo')->getClientOriginalName();
        }
        $data->name_club = $request->name;
        $data->asal_club = $request->asal;

        $data->save();
        return redirect('clubs');
        }

    public function create()
    {
        return view('club.create');
    }

    public function delete($id){
        $data = Club::Find($id);
        $data->delete();
        return redirect('clubs');
    }

    public function edit($id){
        $data = Club::Find($id);
        return view('club.edit',['data' => $data]);
    }

    public function update(Request $request){
        $data = Club::Find($request->id);
        if($request->hasFile('logo')){
            $request->file('logo')->move('img/',$request->file('logo')->getClientOriginalName());
            $data->logo=$request->file('logo')->getClientOriginalName();
        }else{
            $data->logo = $request->default;
        }
        $data->name_club = $request->name;
        $data->asal_club = $request->asal;
        $data->save();
        return redirect('clubs');

    }
    
    }

    

