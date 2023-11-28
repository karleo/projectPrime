@extends('layouts.admin.main')

@section('page.title', 'State')

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
                        <h3 class="card-title">Add State</h3>
                    </div>
                    <!--begin::Form-->
                    <form action="{{ route('state.store') }}" method="post" class="form">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>Country Name:</label>
                                    <select class="form-control" data-control="select2"  name="country_id">
                                        @foreach ($country as $row)
                                            <option value="{{ $row->country_id }}">{{ $row->name }}</option>
                                        @endforeach
                                    </select>
                                        @if($errors->has('country_name'))
                                            <div class="alert alert-danger">{{ $errors->first('country_name') }}</div>
                                        @endif
                                    <span class="form-text text-muted">Please enter country name</span>
                                </div>
                                <div class="col-lg-6">
                                    <label>State name:</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter state name" />
                                        @if($errors->has('name'))
                                            <div class="alert alert-danger">{{ $errors->first('name') }}</div>
                                        @endif
                                    <span class="form-text text-muted">Please enter state name</span>
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
