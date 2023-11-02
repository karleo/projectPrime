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
}
