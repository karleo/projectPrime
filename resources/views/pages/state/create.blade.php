
@extends('layouts.admin.main')

@section('page.title', 'Create State')

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
            <form method="post" action="{{ route('state.store') }}" class="form-group">
                @csrf
             <div class="card-body">
              <div class="form-group mb-8">

              </div>
              <div class="form-group row">
               <label  class="col-2 col-form-label">Country</label>
               <div class="col-10">
                <input class="form-control" type="text" name="country_id" />
               </div>
              </div> 

            </div>

              <div class="form-group row">
               <label  class="col-2 col-form-label">Name</label>
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
