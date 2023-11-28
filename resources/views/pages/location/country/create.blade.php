@extends('layouts.admin.main')

@section('page.title', 'Country')

@section('page.toolbar')

@endsection


@section('content')
<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">Add Country</h3>                         
                    </div>
                    <!--begin::Form-->
                    <form action="{{ route('country.store') }}" method="post" class="form">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>Country Name:</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter country name" />
                                        @if($errors->has('name'))
                                            <div class="alert alert-danger">{{ $errors->first('name') }}</div>
                                        @endif
                                    <span class="form-text text-muted">Please enter country name</span>
                                </div>
                                <div class="col-lg-6">
                                    <label>Country code:</label>
                                    <input type="text" class="form-control" name="code" placeholder="Enter country code" />
                                        @if($errors->has('code'))
                                            <div class="alert alert-danger">{{ $errors->first('code') }}</div>
                                        @endif
                                    <span class="form-text text-muted">Please enter country code</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label>Currency:</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="currency" placeholder="Enter country currency" /> 
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="la la-money"></i>
                                            </span>
                                        </div>
                                    </div>
                                        @if($errors->has('currency'))
                                            <div class="alert alert-danger">{{ $errors->first('currency') }}</div>
                                        @endif
                                    <span class="form-text text-muted">Please enter country currency</span>
                                </div> 
                            </div> 
                      
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-lg-6">
                                    <button type="submit" class="btn btn-primary mr-2">Save</button>
                                    <button type="reset" class="btn btn-secondary">Clear</button>
                                </div>
                                {{-- <div class="col-lg-6 text-lg-right">
                                    <button type="reset" class="btn btn-danger">Delete</button>
                                </div> --}}
                            </div>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Card-->             
            </div>
            <!--end::Row-->
        </div>        
  
    </div>
    <!--end::Container-->
</div>
<!--end::Entry-->
@endsection

@push('styles')
@endpush

@push('scripts') 
    <script>
        @if(session('alert'))
            session('alert')['type']
        @endif
    </script>
@endpush
