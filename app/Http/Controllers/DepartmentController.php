<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;


class DepartmentController extends Controller
{
    //
    public function index()
    {
        $data = Department::all();
        return view('pages.department.index',compact('data'));

    }

    public function create(Request $request)
    {
        return view('pages.department.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $data = Department::create([
            'name' => $request->name,
            'code' => $request->code,
        ]);

        return redirect()->route('dept.index')->with([
            'alert' => [
                'type' => 'success',
                'message' => 'Department name successful added'
            ]
        ]);

    }

    public function edit(Department $department)
    {
        return view('pages.department.edit',compact('department'));
    }

    public function update(Request $request, Department $department)
    {
        $department->name = $request->name;
        $department->code = $request->code;
        $department->save();


        return redirect()->route('dept.index')->with([
            'alert' => [
                'type' => 'success',
                'message' => 'Department name successful update'
            ]
        ]);
    }


}
