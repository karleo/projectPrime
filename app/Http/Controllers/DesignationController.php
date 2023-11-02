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
}
