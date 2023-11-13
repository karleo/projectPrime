<?php

namespace App\Http\Controllers;

use App\Models\State;
use Illuminate\Http\Request;



class StateController extends Controller
{
    //
    public function index()
    {
        $data = State::all();
        return view('pages.state.index',compact('data'));

    }

    public function create(Request $request)
    {
        return view('pages.state.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'country_id' => 'required',          
            'name' => 'required',
            'code' => 'required',
            
        ]);

        $data = State::create([
            'country_id' => $request->country_id,

            'name' => $request->name,
            'code' => $request->code,

        ]);

        return redirect()->route('state.index')->with([
            'alert' => [
                'type' => 'success',
                'message' => 'Country added Successfully'
            ]
        ]);

    }

    public function edit(State $state)
    {
        return view('pages.state.edit',compact('state'));
    }

    public function update(Request $request, State $state)
    {   
        $state->country_id=$request->country_id;
        $state->name = $request->name;
        $state->code = $request->code;
        $state->save();


        return redirect()->route('state.index')->with([
            'alert' => [
                'type' => 'success',
                'message' => 'state successfully updated'
            ]
        ]);
    }


}
