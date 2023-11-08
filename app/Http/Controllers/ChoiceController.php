<?php

namespace App\Http\Controllers;

use App\Models\Choice;
use Illuminate\Http\Request;

class ChoiceController extends Controller
{
    //
    public function index ()
    {
        $data = Choice::all();
        return view('pages.choice.index',compact('data'));
    }

    public function create ()
    {
        return view('pages.choice.create');
    }
}
