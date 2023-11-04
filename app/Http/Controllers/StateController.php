<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;

class StateController extends Controller
{
    //
    public function index()
    {
        $data = State::all();
        return view('pages.states.index',compact('data'));
    }
    public function create(Request $request)
    {
        return view('pages.states.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $data = State::create([
            'name' => $request->name,
            'code' => $request->code,
        ]);

        return redirect()->route('states.index')->with([
            'alert' => [
                'type' => 'success',
                'message' => 'States successfully added'
            ]
        ]);

    }

    public function edit(State $state)
    {
        return view('pages.states.edit',compact('state'));
    }

    public function update(Request $request, State $state)
    {
        $state->name = $request->name;
        $state->code = $request->code;
        $state->save();


        return redirect()->route('state.create')->with([
            'alert' => [
                'type' => 'success',
                'message' => 'States successfully updated'
            ]
        ]);
    }
}

