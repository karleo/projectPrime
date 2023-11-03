<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    //
    public function index()
    {
        $data = City::all();
        return view('pages.city.index',compact('data'));

    }
}
