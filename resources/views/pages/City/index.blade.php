@extends('layouts.admin.main')

@section('page.title', 'City')

@section('page.toolbar')

@endsection


@section('content')
<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">



        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr class="fw-bold fs-6 text-gray-800">
                        <th class="table-sort-desc">City ID</th>
                        <th class="table-sort-asc">State ID</th>
                        <th class="table-sort-asc">Name</th>
                        <th class="table-sort-asc">Code</th>


                    </tr>
                </thead>
             
                @foreach ( $data as $row )

                <tbody>
                    <tr>
                        <td>{{ $row->city_id }}</td>
                        <td> {{ $row->state_id }}</td>
                        <td> {{ $row->name }}</td>
                        <td> {{ $row->code }}</td>

                    </tr>
                </tbody>
                @endforeach
            

            </table>
        </div>




    </div>
    <!--end::Container-->
</div>
<!--end::Entry-->
@endsection

@push('styles')
    {{-- <link href="{{ asset('plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" /> --}}
@endpush

@push('scripts')
    <script>
        var _csrf_token = "{{ csrf_token() }}";
    </script>
    {{-- <script src="{{ asset('plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('js/custom/pages/file-category/index.js') }}"></script> --}}

@endpush

