
@extends('layouts.admin.main')

@section('page.title', 'Create City')

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
             @if ($errors->any())
                        <div class="alert alert-danger">
                            <h4>Errors found when submitting form.</h4>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
            </div>
            <!--begin::Form-->
            <form method="post" action="{{ route('city.store') }}" class="form-group">
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
               <label  class="col-2 col-form-label">State ID</label>
               <div class="col-10">
               <select class="form-control" data-control="select2" name="state_id" >
               @foreach($state as $row)
                    <option value="{{$row->state_id}}">{{$row->name}}</option>|
                @endforeach
                </select>
                <!-- <input class="form-control" type="text" name="state_id" /> -->
               </div>
              </div>

              <div class="form-group row">
               <label  class="col-2 col-form-label">City</label>
               <div class="col-10">
                <input class="form-control" type="text" name="name" />
               </div>
              </div>
              <div class="form-group row">
               <label for="example-search-input" class="col-2 col-form-label">Code</label>
               <div class="col-10">
                <input class="form-control" type="text" name="code" >
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
