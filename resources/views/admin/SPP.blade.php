@extends('layouts.master')

@section('title') @lang('translation.BOQ_List') @endsection

@section('css')

    <!-- flatpickr css -->
    <link href="{{ URL::asset('/assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css">

    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Incomer Selection @endslot
        @slot('title') SPP List @endslot
    @endcomponent


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm">
                            <!-- <div class="mb-4">
                                <button type="button" class="btn btn-light waves-effect waves-light"><i
                                        class="bx bx-plus me-1"></i> Add SPP</button>
                            </div> -->
                        </div>
                        <div class="col-sm-auto">
                            <div class="d-flex align-items-center gap-1 mb-4">
                            <!-- <div class="mb-4">
                                <button type="button" class="btn btn-light waves-effect waves-light">
                                    <a href="admin.add-feeder-ammeter" data-key="t-invoice-list">
                                    <i class="bx bx-plus me-1"></i> Add SPP</a>
                                </button>
                            </div> -->
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="table-responsive">
                        <table class="table align-middle  dt-responsive table-check nowrap"
                            style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                            <thead>
                                <tr class="bg-transparent">
                                    <th style="width: 30px;">
                                        <div class="form-check font-size-16">
                                            <input type="checkbox" name="check" class="form-check-input" id="checkAll">
                                            <label class="form-check-label" for="checkAll"></label>
                                        </div>
                                    </th>
                                    <th style="width: 120px;">SPP ID</th>
                                    <th>SPP Type</th>
                                    <!-- <th>Status</th> -->
                                    <th style="width: 90px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                                <tr>
                                    <td>
                                        <div class="form-check font-size-16">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label"></label>
                                        </div>
                                    </td>

                                    <td><a href="javascript: void(0);" class="text-dark fw-medium">#MN0215</a> </td>
                                    <td>
                                    No
                                    </td>

                                    <td>
                                        <div class="dropdown">
                                            <button
                                                class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check font-size-16">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label"></label>
                                        </div>
                                    </td>

                                    <td><a href="javascript: void(0);" class="text-dark fw-medium">#MN0215</a> </td>
                                    <td>
                                    Yes
                                    </td>

                                    <td>
                                        <div class="dropdown">
                                            <button
                                                class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                    <!-- end table responsive -->
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
@endsection

@section('script')

    <!-- flatpickr js -->
    <script src="{{ URL::asset('/assets/libs/flatpickr/flatpickr.min.js') }}"></script>

    <!-- Required datatable js -->
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>

    <!-- init js -->
    <script src="{{ URL::asset('/assets/js/pages/invoices-list.init.js') }}"></script>

@endsection
