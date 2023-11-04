<?php

namespace App\Http\Controllers;

use App\Models\Designation;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    //
    public function index()
    {
        $data = Designation::all();
        return view('pages.designation.index',compact('data'));
    }
    public function create(Request $request)
    {
        return view('pages.designation.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $data = Designation::create([
            'name' => $request->name,
            'code' => $request->code,
        ]);

        return redirect()->route('desgnt.index')->with([
            'alert' => [
                'type' => 'success',
                'message' => 'Designation name successful added'
            ]
        ]);

    }

    public function edit(Designation $designation)
    {
        return view('pages.designation.edit',compact('designation'));
    }

    public function update(Request $request, Designation $designation)
    {
        $designation->name = $request->name;
        $designation->code = $request->code;
        $designation->save();


        return redirect()->route('desgnt.create')->with([
            'alert' => [
                'type' => 'success',
                'message' => 'designation name successful update'
            ]
        ]);
    }


}


