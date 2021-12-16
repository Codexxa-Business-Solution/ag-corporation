@extends('layouts.master')

@section('title') @lang('translation.hp_products') @endsection

@section('css')

    <!-- flatpickr css -->
    <link href="{{ URL::asset('/assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css">

    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') System User @endslot
        @slot('title') Add Role  @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
               
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="example-text-input" class="form-label">Role </label>
                            <input class="form-control" type="text" placeholder="Role Name like Admin, Supervisor" id="example-text-input">
                        </div>
                          
                        <button type="button" class="btn btn-info btn-rounded waves-effect waves-light" style="width: 90px;"> 
                            <a class=" dropdown-toggle arrow-none" href="" 
                            id="topnav-dashboard" role="button" style="color:white;">
                            <!-- <i data-feather="home"></i> -->
                            Add 
                            </a>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
        <!-- <div class="card"> -->
                <!-- <div class="card-header">
                    <h4 class="card-title">Bordered table</h4>
                    <p class="card-title-desc">Add <code>.table-bordered</code> for borders on all sides of
                        the table and cells.</p>
                </div> -->
                <!-- <div class="card-body"> -->

                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">

                            <thead>
                                <tr style="background: lightgray;">
                                    <th>Module/Permissions</th>
                                    <th>Create</th>
                                    <th>Read</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Quotation Request</th>
                                    <td> 
                                        <input type="checkbox" id="switch1" switch="info" checked />
                                        <label for="switch1" data-on-label="Yes" data-off-label="No"></label>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="switch2" switch="info"  />
                                        <label for="switch2" data-on-label="Yes" data-off-label="No"></label>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="switch3" switch="info"  />
                                        <label for="switch3" data-on-label="Yes" data-off-label="No"></label>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="switch16" switch="info"  />
                                        <label for="switch16" data-on-label="Yes" data-off-label="No"></label>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">BOQ Request</th>
                                    <td>
                                        <input type="checkbox" id="switch4" switch="info"  />
                                        <label for="switch4" data-on-label="Yes" data-off-label="No"></label>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="switch5" switch="info"  />
                                        <label for="switch5" data-on-label="Yes" data-off-label="No"></label>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="switch6" switch="info"  />
                                        <label for="switch6" data-on-label="Yes" data-off-label="No"></label>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="switch17" switch="info"  />
                                        <label for="switch17" data-on-label="Yes" data-off-label="No"></label>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Regional User</th>
                                    <td>
                                        <input type="checkbox" id="switch7" switch="info"  />
                                        <label for="switch7" data-on-label="Yes" data-off-label="No"></label>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="switch8" switch="info"  />
                                        <label for="switch8" data-on-label="Yes" data-off-label="No"></label>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="switch9" switch="info"  />
                                        <label for="switch9" data-on-label="Yes" data-off-label="No"></label>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="switch18" switch="info"  />
                                        <label for="switch18" data-on-label="Yes" data-off-label="No"></label>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Employee </th>
                                    <td>
                                        <input type="checkbox" id="switch10" switch="info"  />
                                        <label for="switch10" data-on-label="Yes" data-off-label="No"></label>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="switch11" switch="info"  />
                                        <label for="switch11" data-on-label="Yes" data-off-label="No"></label>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="switch12" switch="info"  />
                                        <label for="switch12" data-on-label="Yes" data-off-label="No"></label>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="switch19" switch="info"  />
                                        <label for="switch19" data-on-label="Yes" data-off-label="No"></label>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Customer</th>
                                    <td>
                                        <input type="checkbox" id="switch13" switch="info"  />
                                        <label for="switch13" data-on-label="Yes" data-off-label="No"></label>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="switch14" switch="info"  />
                                        <label for="switch14" data-on-label="Yes" data-off-label="No"></label>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="switch15" switch="info"  />
                                        <label for="switch15" data-on-label="Yes" data-off-label="No"></label>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="switch20" switch="info"  />
                                        <label for="switch20" data-on-label="Yes" data-off-label="No"></label>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                <!-- </div> -->
                <!-- end card body -->
            <!-- </div> -->
            <!-- end card -->
        </div>
    </div>

    <!-- <div class="row">
        <div class="col-lg-6">
            <div class="card">
               
                <div class="card-body">

                </div>
            </div>
        </div>
    </div> -->

    @endsection

@section('script')

    <!-- flatpickr js -->
    <script src="{{ URL::asset('/assets/libs/flatpickr/flatpickr.min.js') }}"></script>

    <!-- Required datatable js -->
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>

    <!-- init js -->
    <script src="{{ URL::asset('/assets/js/pages/invoices-list.init.js') }}"></script>

@endsection
