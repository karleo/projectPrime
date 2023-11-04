<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    //
    public function index()
    {
        $data = City::all();
        return view('pages.cities.index',compact('data'));

    }

    public function create(Request $request)
    {
        return view('pages.cities.create');
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

        return redirect()->route('cities.index')->with([
            'alert' => [
                'type' => 'success',
                'message' => 'City name successful added'
            ]
        ]);

    }

    public function edit(City $city)
    {
        return view('pages.cities.edit',compact('city'));
    }

    public function update(Request $request, City $city)
    {
        $city->name = $request->name;
        $city->code = $request->code;
        $city->save();


        return redirect()->route('cities.index')->with([
            'alert' => [
                'type' => 'success',
                'message' => 'City name successfuly update'
            ]
        ]);
    }


}
