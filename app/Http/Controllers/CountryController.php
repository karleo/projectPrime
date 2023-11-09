<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Models\Department;


class CountryController extends Controller
{
    //
    public function index()
    {
        $data = Country::all();
        return view('pages.country.index',compact('data'));

    }

    public function create(Request $request)
    {
        return view('pages.country.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $data = Country::create([
            'name' => $request->name,
            'code' => $request->code,
        ]);

        return redirect()->route('country.index')->with([
            'alert' => [
                'type' => 'success',
                'message' => 'Country added Successfully'
            ]
        ]);

    }

    public function edit(Country $country)
    {
        return view('pages.country.edit',compact('country'));
    }

    public function update(Request $request, Country $country)
    {
        $country->name = $request->name;
        $country->code = $request->code;
        $country->save();


        return redirect()->route('country.index')->with([
            'alert' => [
                'type' => 'success',
                'message' => 'Department name successful update'
            ]
        ]);
    }


}
