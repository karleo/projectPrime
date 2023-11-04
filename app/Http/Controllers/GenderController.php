<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use Illuminate\Http\Request;

class GenderController extends Controller
{
    //
    public function index()
    {
        $data = Gender::all();
        return view('pages.gender.index',compact('data'));
    }
    public function create(Request $request)
    {
        return view('pages.gender.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $data = Gender::create([
            'name' => $request->name,
            'gender' => $request->gender,
        ]);

        return redirect()->route('gender.index')->with([
            'alert' => [
                'type' => 'success',
                'message' => 'Gender successful added'
            ]
        ]);

    }

    public function edit(Gender $gender)
    {
        return view('pages.gender.edit',compact('gender'));
    }

    public function update(Request $request, Gender $gender)
    {
        $gender->code = $request->code;
        $gender->gender = $request->gender;
        $gender->save();


        return redirect()->route('gender.create')->with([
            'alert' => [
                'type' => 'success',
                'message' => 'gender successfully updated'
            ]
        ]);
    }
}

