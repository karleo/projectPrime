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
}
