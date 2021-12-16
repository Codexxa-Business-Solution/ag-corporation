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
        @slot('li_1') BOQs @endslot
        @slot('title') BOQ Details @endslot
    @endcomponent


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <!-- <div class="col-sm">
                            <div class="mb-4">
                                <button type="button" class="btn btn-light waves-effect waves-light"><i
                                        class="bx bx-plus me-1"></i> Add BOQ</button>
                            </div>
                        </div> -->
                        <!-- <div class="col-sm-auto">
                            <div class="d-flex align-items-center gap-1 mb-4">
                                <div class="input-group datepicker-range">
                                    <input type="text" class="form-control flatpickr-input" data-input
                                        aria-describedby="date1">
                                    <button class="input-group-text" id="date1" data-toggle><i
                                            class="bx bx-calendar-event"></i></button>
                                </div>
                                <div class="dropdown">
                                    <a class="btn btn-link text-muted py-1 font-size-16 shadow-none dropdown-toggle"
                                        href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bx bx-dots-horizontal-rounded"></i>
                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <!-- end row -->

                    <div class="table-responsive">
                        <table class="table align-middle datatable dt-responsive table-check nowrap"
                            style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                            <thead>
                                <tr class="bg-transparent">
                                    <th style="width: 30px;">
                                        <div class="form-check font-size-16">
                                            <input type="checkbox" name="check" class="form-check-input" id="checkAll">
                                            <label class="form-check-label" for="checkAll"></label>
                                        </div>
                                    </th>
                                    <th style="width: 120px;">Sr. No.</th>
                                    <th>Description</th>
                                    <th>Make</th>
                                    <th>Unit</th>
                                    <th>QTY</th>
                                    <!-- <th>Status</th> -->
                                    <!-- <th style="width: 150px;">Download Pdf</th> -->
                                    <!-- <th style="width: 90px;">Action</th> -->
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

                                    <td>1</td>
                                    <td>
                                    CM92171OOPOOG, 250 AMP, 3P, 25KA, TMD, D SINE,  MCCB, MAKE L&T
                                    </td>
                                    <td>L&T</td>
                                    <td>NO</td>
                                    <td>1</td>
                                    <!-- <td>
                                       <div class="badge badge-soft-success font-size-12">Approve</div>
                                    </td> -->

                                    
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check font-size-16">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label"></label>
                                        </div>
                                    </td>

                                    <td>2 </td>
                                    <td>
                                    CM97785OOOO, Spreaders (Set of 6) 3P, 100 AMP, DU100/DU125U MCCB, MAKE L&T
                                    </td>
                                    <td>L&T</td>
                                    <td>SET</td>
                                    <td>1</td>
                                    
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check font-size-16">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label"></label>
                                        </div>
                                    </td>

                                    <td>3 </td>
                                    <td>
                                    CM97785OOOO, Spreaders (Set of 6) 3P, 100 AMP, DU100/DU125U MCCB, MAKE L&T
                                    </td>
                                    <td>L&T</td>
                                    <td>SET</td>
                                    <td>1</td>
                                    <!-- <td>
                                    <div class="badge badge-soft-warning font-size-12">Pending</div>
                                    </td>  -->
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check font-size-16">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label"></label>
                                        </div>
                                    </td>

                                    <td>
                                        4
                                     </td>
                                     <td>
                                    CM97785OOOO, Spreaders (Set of 6) 3P, 100 AMP, DU100/DU125U MCCB, MAKE L&T
                                    </td>
                                    <td>L&T</td>
                                    <td>SET</td>
                                    <td>1</td>
                                    <!-- <td>
                                       <div class="badge badge-soft-success font-size-12">Approve</div>
                                    </td> -->
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
