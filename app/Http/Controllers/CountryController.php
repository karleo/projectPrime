<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use RealRashid\SweetAlert\Facades\Alert;

class CountryController extends Controller
{
    //
    public function index()
    {
        $data = Country::latest()->paginate(10);
        
        $title = 'Delete country!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);      

        return view('pages.location.country.index',compact('data'));
    }

    public function create()
    {
        return view('pages.location.country.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:countries,name,except,country_id',
            'code' => 'unique:countries,code,except,country_id',
            'currency' => 'unique:countries,currency,except,country_id',
        ]);

        Country::create([
            'name' => $request->name,
            'code' => $request->code,
            'currency' => $request->currency
        ]);

        return redirect()->route('country.index')->with('success', 'Country Created Successfully!');
    }

    public function edit(Country $country)
    {
        return view('pages.location.country.edit',compact('country'));
    }

    public function update(Request $request, Country $country)
    {
        $country->name = $request->name;
        $country->code = $request->code;
        $country->currency = $request->currency;
        $country->save();

        return redirect()->route('country.index')->with([
            'alert' => [
                'type' => 'success',
                'message' => 'Country name successful update'
            ]
        ]);
    }

    public function destroy(Country $country)
    {

        if($country->state()->count())
        {
            $data = Alert::warning('Can not delete', 'Country had a state');  
            return back()->withMessage('Cannot delete: this Country has State data');
        }

        $country->delete();
        return redirect()->route('country.index')->with('alert', 'Delete');

    }
}
