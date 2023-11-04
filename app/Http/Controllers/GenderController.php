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
}

