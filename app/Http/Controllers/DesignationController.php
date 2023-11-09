<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Designation;



class DesignationController extends Controller
{
    //
    public function index()
    {
        $data = Designation::all(); 
        return view('pages.designation.index',compact('data'));
    }

    public function create ()
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

        return redirect()->route('designation.index')->with([
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


        return redirect()->route('designation.index')->with([
            'alert' => [
                'type' => 'success',
                'message' => 'Designation name successful update'
            ]
        ]);
    }
}
