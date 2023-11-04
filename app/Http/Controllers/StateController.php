<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;

class StateController extends Controller
{
    //
    //
    public function index()
    {
        $data = State::all();
        return view('pages.states.index',compact('data'));

    }
}
