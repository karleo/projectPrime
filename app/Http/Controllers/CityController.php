<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use App\Models\State;



class CityController extends Controller
{
    //
    public function index()
    {
        $data = City::all();
        return view('pages.city.index',compact('data'));

    }

    public function create(Request $request)
    {   
        $state = State::all();
        return view('pages.city.create',compact('state'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'state_id' => 'required',
            'name' => 'required',
            'code' => 'required',
        ]);

        $data = City::create([
            'state_id'=> $request->state_id,
            'name' => $request->name,
            'code' => $request->code,
        ]);

        return redirect()->route('city.index')->with([
            'alert' => [
                'type' => 'success',
                'message' => 'City added Successfully'
            ]
        ]);

    }

    public function edit(City $city)
    {
        return view('pages.city.edit',compact('city'));
    }

    public function update(Request $request, City $city)
    {   $city->state_id=$request->state_id;
        $city->name = $request->name;
        $city->code = $request->code;
        $city->save();


        return redirect()->route('city.index')->with([
            'alert' => [
                'type' => 'success',
                'message' => 'City successfully updated'
            ]
        ]);
    }


}
