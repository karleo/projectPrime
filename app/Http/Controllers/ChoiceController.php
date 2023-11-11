<?php

namespace App\Http\Controllers;

use App\Models\Choice;
use Illuminate\Http\Request;
use Mockery\Matcher\Type;

class ChoiceController extends Controller
{
    //
    public function index ()
    {
        $data = Choice::all();
        return view('pages.choice.index',compact('data'));
    }

    public function create (Request $request)
    {
        return view('pages.choice.create');
    }

    public function store (Request $request)
    {
        $request->validate([
            'booking' => 'required|unique:choices,booking,except,choice_id',
            'arrivaldate' => 'required'
        ]);

        $data = Choice::create([
            'booking' => $request->booking,
            'job' => $request->job,
            'invoice' => $request->invoice,
            'awb' => $request->awb,
            'pieces' => $request->pieces,
            'ab' => $request->ab,
            'reciever' => $request->reciever,
            'location' => $request->location,
            'status' => $request->status,
            'trucks' => $request->trucks,
            'state' => $request->state,
            'arrivaldate' => $request->arrivaldate,
            'boe' => $request->boe,
            'tranferout' => $request->tranferout,
            'quantity' => $request->quantity,
            'weight' => $request->weight,
            'value' => $request->booking,
            'remarks' => $request->remarks,
        ]);

        return redirect()->route('choice.index')->with([
            'alert' => [
                 'type'  => 'success',
                 'message' => 'Choice Field Added Successfully'
            ]
            ]);

    }
    public function edit(Choice $choice){

        return view('pages.choice.edit',compact('choice'));
    }

    public function update (Request $request, Choice $choice){

        $choice->booking = $request->booking;
        $choice->job = $request->job;
        $choice->invoice = $request->invoice;
        $choice->awb = $request->awb;
        $choice->pieces = $request->pieces;
        $choice->ab = $request->ab;
        $choice->reciever = $request->reciever;
        $choice->location = $request->location;
        $choice->status = $request->status;
        $choice->trucks = $request->trucks;
        $choice->state = $request->state;
        $choice->arrivaldate = $request->arrivaldate;
        $choice->boe = $request->boe;
        $choice->tranferout = $request->tranferout;
        $choice->quantity = $request->quantity;
        $choice->weight = $request->weight;
        $choice->value = $request->value;
        $choice->remarks = $request->remarks;
        $choice->save();

        return redirect()->route('choice.index')->with([
            'alert' => [
                 'type'  => 'success',
                 'message' => 'Choice Field Updated Successfully'
            ]
            ]);
    }

}
