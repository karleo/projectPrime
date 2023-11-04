<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeStatus;

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
                   'message' => 'Employee Status is successfully added'
               ]
           ]);
   
       }
   
       public function edit(EmployeeStatus $employeeStatus)
       {
           return view('pages.employeestatus.edit',compact('employeestatus'));
       }
   
       public function update(Request $request, EmployeeStatus $employeeStatus)
       {
           $employeeStatus->name = $request->name;
           $employeeStatus->code = $request->code;
           $employeeStatus->save();
   
   
           return redirect()->route('employeestatus.create')->with([
               'alert' => [
                   'type' => 'success',
                   'message' => 'Employee status is successfully updated'
               ]
           ]);
       }
   
   
}
