<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use App\Models\Gender;
use App\Models\Employee;
use App\Http\Requests\Employee\StoreEmployeeRequest;

class EmployeeController extends Controller
{
    //
    public function index(){
        $data = Employee::all();
        return view('pages.employee.index',compact('data'));
    }

    public function create(){
        $gender = Gender::all();
        $department = Department::all();

        return view('pages.employee.create',compact('gender','department'));
    }

    public function store(StoreEmployeeRequest $request)
    {
        Employee::create([
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'gender_id' => $request->gender_id,
            'department_id' => $request->department_id,
            'birth_date' => $request->birth_date, 
        ]);

        return redirect()->route('employee.index')->with([
            'alert' => [
                'type' => 'success',
                'message' => 'Employee successfully added'
            ]
        ]);
    }
}
