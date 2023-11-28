<?php

namespace App\Http\Controllers;

use App\Models\State;
use App\Models\Country;
use Illuminate\Http\Request;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = State::all();
        return view('pages.location.state.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $country = Country::all();
        return view('pages.location.state.create',compact('country'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'country_id' => 'required',
            'name' => 'required|unique:states,name,except,state_id',
        ]);

        State::create([
            'country_id' => $request->country_id,
            'name' => $request->name,
        ]);

        return redirect()->route('state.index')->with([
            'alert' => [
                'type' => 'success',
                'message' => 'State successful added'
            ]
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(State $state)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(State $state)
    {
        //
        $country = Country::all();
        return view('pages.location.state.edit',compact('state','country'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, State $state)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(State $state)
    {
        //
    }
}
