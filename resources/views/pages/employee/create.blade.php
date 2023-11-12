@extends('layouts.admin.main')

@section('page.title', 'Add Employee')

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

        <form class="form" action="{{ route('employee.store') }}" method="post">
            @csrf
            <div class="card-body">
             <div class="form-group row">
              <div class="col-lg-4">
               <label>First Name:</label>
               <input type="text" class="form-control" name="first_name" placeholder="Enter first name"/>  
                    @if($errors->has('first_name'))
                        <div class="alert alert-danger">{{ $errors->first('first_name') }}</div>
                    @endif
               <span class="form-text text-muted">Please enter your first name</span>
              </div>
              <div class="col-lg-4">
               <label>Middle Name:</label>
               <input type="text" class="form-control" name="middle_name" placeholder="Enter middle name"/>
               <span class="form-text text-muted">Please enter your middle name</span>
              </div>
              <div class="col-lg-4">
                <label>Last Name:</label>
                <input type="text" class="form-control" name="last_name" placeholder="Enter last name"/>
                    @if($errors->has('last_name'))
                        <div class="alert alert-danger">{{ $errors->first('last_name') }}</div>
                    @endif
                <span class="form-text text-muted">Please enter your last name</span>
               </div> 
             </div>
             <div class="form-group row">
              <div class="col-lg-4">
               <label>Gender:</label>
               <select class="form-control" data-control="select2"  data-placeholder="Select an option" name="gender_id">
                    <option>Select an option</option>
                    @foreach ($gender as $item)
                        <option value="{{$item->gender_id}}">{{ $item->name }}</option>
                    @endforeach
                </select>
               <span class="form-text text-muted">Please select your gender</span>
              </div>
              <div class="col-lg-4">
                <label>Department:</label>
                <select class="form-control" data-control="select2"  data-placeholder="Select an option" name="department_id">
                     <option>Select an option</option>
                     @foreach ($department as $item)
                         <option value="{{$item->department_id}}">{{ $item->name }}</option>
                     @endforeach
                 </select>
                <span class="form-text text-muted">Please select your department</span>
               </div>
              <div class="col-lg-4">
               <label>Birth Date:</label>
               <div class="input-group">
                <input type="date" class="form-control" name="birth_date" placeholder="Enter your birth date"/>
               </div>
               <span class="form-text text-muted">Please enter your birth date</span>
              </div>
             </div>
       
            </div>
            <div class="card-footer">
             <div class="row">
              <div class="col-lg-4"></div>
              <div class="col-lg-8">
               <button type="submit" class="btn btn-primary mr-2">Submit</button>
               <button type="reset" class="btn btn-secondary">Clear</button>
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
