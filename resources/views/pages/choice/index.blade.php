@extends('layouts.admin.main')

@section('page.title', 'Choice')

@section('page.toolbar')

@endsection


@section('content')
<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">


        <!--begin::Card-->
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
                    <a href="" class="btn btn-primary font-weight-bolder">
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
            <div class="card-body">


                <table id="kt_datatable_dom_positioning" class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                    <thead>
                        <tr class="fw-bold fs-6 text-gray-800 px-7">
                            <th>Booking</th>
                            <th>Job</th>
                            <th>Invoice</th>
                            <th>AWB</th>
                            <th>Pieces</th>
                            <th>A/B</th>
                            <th>Reciever</th>
                            <th>Location</th>
                            <th>Status</th>
                            <th>Trucks</th>
                            <th>States</th>
                            <th>Arrival Date</th>
                            <th>BOE</th>
                            <th>Transfer Out</th>
                            <th>Quantity</th>
                            <th>Weight</th>
                            <th>Value</th>
                            <th>Remarks</th>

                        </tr>
                    </thead>
                    @foreach ( $data as $row )
                    <tbody>
                        <tr>
                            <td>{{ $row->booking }}</td>
                            <td> {{ $row->job }}</td>
                            <td>{{ $row->invoice }}</td>
                            <td> {{ $row->awb }}</td>
                            <td> {{ $row->pieces }}</td>
                            <td> {{ $row->ab }}</td>
                            <td> {{ $row->reciever }}</td>
                            <td> {{ $row->location }}</td>
                            <td> {{ $row->status }}</td>
                            <td> {{ $row->trucks }}</td>
                            <td> {{ $row->states }}</td>
                            <td> {{ $row->arrivaldate }}</td>
                            <td> {{ $row->boe }}</td>
                            <td> {{ $row->transferout }}</td>
                            <td> {{ $row->quantity }}</td>
                            <td> {{ $row->weight }}</td>
                            <td> {{ $row->value }}</td>
                            <td> {{ $row->remarks }}</td>
                            <td> <a href="{{ route('choice.edit', $row->choice_id) }}">Edit </a>
                                <a href="#"> Delete</a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>

            </div>
        </div>
        <!--end::Card-->

    </div>
    <!--end::Container-->
</div>
<!--end::Entry-->
@endsection

@push('styles')
    <link href="{{ asset('plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endpush

@push('scripts')
    <script>
        var _csrf_token = "{{ csrf_token() }}";
    </script>
    <script src="{{ asset('plugins/custom/datatables/datatables.bundle.js') }}"></script>

    <script>
        $("#kt_datatable_dom_positioning").DataTable({
                "language": {
                    "lengthMenu": "Show _MENU_",
                },
                "dom":
                    "<'row'" +
                    "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
                    "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
                    ">" +
                    "<'table-responsive'tr>" +
                    "<'row'" +
                    "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                    "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                    ">"
            });
    </script>

@endpush

