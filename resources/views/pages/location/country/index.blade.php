@extends('layouts.admin.main')

@section('page.title', 'Country')

@section('page.toolbar')

@endsection


@section('content')
<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">

        <div class="card card-custom">
            <div class="card-header">
                <div class="card-title">
                    <span class="card-icon">
                        <i class="flaticon2-supermarket text-primary"></i>
                    </span>
                    <h3 class="card-label"></h3>
                </div>
                <div class="card-toolbar">
                    <!--begin::Button-->
                    <a href="{{ route('country.create') }}" class="btn btn-primary font-weight-bolder">
                    <span class="svg-icon svg-icon-md">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <circle fill="#000000" cx="9" cy="15" r="6" />
                                <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>New Record</a>
                    <!--end::Button-->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-xs-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-hover table-bordered datatable">
                                <thead>
                                <tr>
                                    <tr class="fw-bold fs-6 text-gray-800 px-7">
                                        <th>Country Name</th>
                                        <th>Code</th>
                                        <th>Currency</th>
                                        <th>Action</th>
                                    </tr>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $row)
                                    <tr>
                                        <td>{{ $row->name }}</td>
                                        <td> {{ $row->code }}</td>
                                        <td> {{ $row->currency }}</td>
                                        <td>  
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--end::Container-->
</div>
<!--end::Entry-->
@endsection

@push('styles')
    <link href="{{ asset('plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endpush

@push('scripts')

    <script src="{{ asset('plugins/custom/datatables/datatables.bundle.js') }}"></script>

    <script src="{{ asset('js/pages/admin.js') }}"> </script>

@endpush

