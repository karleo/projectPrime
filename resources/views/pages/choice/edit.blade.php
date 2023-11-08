
@extends('layouts.admin.main')

@section('page.title', 'Views Choice')

@section('page.toolbar')

@endsection


@section('content')
<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">

        <div class="card card-custom">
            <div class="card-header">
             <h3 class="card-title">

             </h3>
            </div>
            <!--begin::Form-->
            <form method="post" action="{{route('choice.update',$choice->choice_id)}}" class="form-group">
                @csrf
             <div class="card-body">
              <div class="form-group mb-8">
               {{-- <div class="alert alert-custom alert-default" role="alert">
                <div class="alert-icon"><i class="flaticon-warning text-primary"></i></div>
                <div class="alert-text">
                 Here are examples of <code>.form-control</code> applied to each textual HTML5 input type:
                </div>
               </div> --}}
              </div>
              <div class="form-group row">
               <label  class="col-2 col-form-label">Booking</label>
               <div class="col-10">
                <input class="form-control" type="text" name="booking"  value="{{$choice->booking}}"/>
               </div>
              </div>
              <div class="form-group row">
               <label for="example-search-input" class="col-2 col-form-label">Job</label>
               <div class="col-10">
                <input class="form-control" type="text" name="job" value="{{$choice->job}}" >
               </div>
              </div>

              <div class="form-group row">
               <label  class="col-2 col-form-label">Invoice</label>
               <div class="col-10">
                <input class="form-control" type="text" name="invoice" value="{{$choice->invoice}}" />
               </div>
              </div>

              <div class="form-group row">
               <label  class="col-2 col-form-label">AWB</label>
               <div class="col-10">
                <input class="form-control" type="text" name="awb" value="{{$choice->awb}}" />
               </div>
              </div>

              <div class="form-group row">
               <label  class="col-2 col-form-label">Pieces</label>
               <div class="col-10">
                <input class="form-control" type="text" name="pieces" value="{{$choice->pieces}}"/>
               </div>
              </div>

              <div class="form-group row">
               <label  class="col-2 col-form-label">A/B</label>
               <div class="col-10">
                <input class="form-control" type="text" name="ab" value="{{$choice->ab}}" />
               </div>
              </div>

              <div class="form-group row">
               <label  class="col-2 col-form-label">Reciever</label>
               <div class="col-10">
                <input class="form-control" type="text" name="reciever" value="{{$choice->reciever}}" />
               </div>
              </div>

              <div class="form-group row">
               <label  class="col-2 col-form-label">Location</label>
               <div class="col-10">
                <input class="form-control" type="text" name="location"  value="{{$choice->location}}" />
               </div>
              </div>

              <div class="form-group row">
               <label  class="col-2 col-form-label">Status</label>
               <div class="col-10">
                <input class="form-control" type="text" name="status" value="{{$choice->status}}" />
               </div>
              </div>

              <div class="form-group row">
               <label  class="col-2 col-form-label">Trucks</label>
               <div class="col-10">
                <input class="form-control" type="text" name="trucks" value="{{$choice->trucks}}" />
               </div>
              </div>

              <div class="form-group row">
               <label  class="col-2 col-form-label">States</label>
               <div class="col-10">
                <input class="form-control" type="text" name="state" value="{{$choice->state}}" />
               </div>
              </div>

              <div class="form-group row">
               <label  class="col-2 col-form-label">Arrival Date</label>
               <div class="col-10">
                <input class="form-control" type="date" name="arrivaldate" value="{{$choice->arrivaldate}}" />
               </div>
              </div>

              <div class="form-group row">
               <label  class="col-2 col-form-label">BOE</label>
               <div class="col-10">
                <input class="form-control" type="text" name="boe" value="{{$choice->boe}}" />
               </div>
              </div>

              <div class="form-group row">
               <label  class="col-2 col-form-label">Transfer Out</label>
               <div class="col-10">
                <input class="form-control" type="text" name="tranferout"  value="{{$choice->tranferout}}"/>
               </div>
              </div>

              <div class="form-group row">
               <label  class="col-2 col-form-label">Quantity</label>
               <div class="col-10">
                <input class="form-control" type="text" name="quantity" value="{{$choice->quantity}}" />
               </div>
              </div>

              <div class="form-group row">
               <label  class="col-2 col-form-label">weight</label>
               <div class="col-10">
                <input class="form-control" type="text" name="weight" value="{{$choice->weight}}" />
               </div>
              </div>

              <div class="form-group row">
               <label  class="col-2 col-form-label">Value</label>
               <div class="col-10">
                <input class="form-control" type="text" name="value"  value="{{$choice->value}}"/>
               </div>
              </div>

              <div class="form-group row">
               <label  class="col-2 col-form-label">Remarks</label>
               <div class="col-10">
                <input class="form-control" type="text" name="remarks" value="{{$choice->remarks}}" />
               </div>
              </div>

             </div>
             <div class="card-footer">
              <div class="row">
               <div class="col-2">
               </div>
               <div class="col-10">
                <button type="submit" class="btn btn-success mr-2">Submit</button>
                <button type="reset" class="btn btn-secondary">Cancel</button>
               </div>
              </div>
             </div>
            </form>
           </div>



    </div>
    <!--end::Container-->
</div>
<!--end::Entry-->
@endsection

@push('styles')
@endpush

@push('scripts')
@endpush
