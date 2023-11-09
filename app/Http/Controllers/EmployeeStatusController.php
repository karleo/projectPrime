<?php

namespace App\Http\Controllers;

use App\Models\EmployeeStatus;
use Illuminate\Http\Request;

class EmployeeStatusController extends Controller
{
    //
    public function index()
    {
        $data = EmployeeStatus::all();
        return view('pages.employeestatus.index',compact('data'));

    }

    public function create(Request $request)
    {
        return view('pages.employeestatus.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $data = EmployeeStatus::create([
            'name' => $request->name,
            'code' => $request->code,
        ]);

        return redirect()->route('employeestatus.index')->with([
            'alert' => [
                'type' => 'success',
                'message' => 'Employee Status name successful added'
            ]
        ]);

    }

    public function edit(EmployeeStatus $employeestatus)
    {
        return view('pages.employeestatus.edit',compact('employeestatus'));
    }

    public function update(Request $request, EmployeeStatus $employeestatus)
    {
        $employeestatus->name = $request->name;
        $employeestatus->code = $request->code;
        $employeestatus->save();


        return redirect()->route('employeestatus.index')->with([
            'alert' => [
                'type' => 'success',
                'message' => 'Department name successful update'
            ]
        ]);
    }


}
