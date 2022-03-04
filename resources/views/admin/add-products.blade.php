@extends('layouts.master')

@section('title') @lang('translation.Company_Name') @endsection

@section('css')

    <!-- flatpickr css -->
    <link href="{{ URL::asset('/assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css">

    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Pump Catalog Selection @endslot
        @slot('title')  Add Pump @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <!-- <div class="card-header">
                    <h4 class="card-title">Sizing</h4>
                    <p class="card-title-desc">Set heights using classes like <code>.form-control-lg</code> and
                        <code>.form-control-sm</code>.</p>
                </div> -->
                <div class="card-body">
                    <form>
                        <div class="mb-4">
                            <label class="form-label" for="default-input">Pump Type </label>
                            <input class="form-control" type="text" id="default-input" 
                            placeholder="Enter Pump Type">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="default-input">Select Components </label><br>
                            <div class="btn-group">
                            <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Select Multiple Components Name <i class="mdi mdi-chevron-down"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-md p-4">
                                <form>
                                <div class="mb-2">
                                        <div class="form-check custom-checkbox">
                                            <input type="checkbox" class="form-check-input" id="component1">
                                            <label class="form-check-label" for="component1">Component 1</label>
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <div class="form-check custom-checkbox">
                                            <input type="checkbox" class="form-check-input" id="component2">
                                            <label class="form-check-label" for="component2">Component 2</label>
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <div class="form-check custom-checkbox">
                                            <input type="checkbox" class="form-check-input" id="component3">
                                            <label class="form-check-label" for="component3">Component 3</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Select</button>
                                </form>
                            </div>
                        </div>
                        </div>
                        <!-- <div class="mb-4">
                            <label class="form-label" for="default-input">No Of Pump </label>
                            <input class="form-control" type="text" id="default-input" 
                            placeholder="Enter No Of Pump">
                        </div> -->
                        <!-- <button type="button" class="btn btn-info btn-rounded waves-effect waves-light"> 
                            <a class=" dropdown-toggle arrow-none" href="" 
                            id="topnav-dashboard" role="button" style="color:white;">
                            Add Pump
                            </a>
                        </button> -->
                        <button type="submit" class="btn btn-info">  Add Pump</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection

@section('script')

    <!-- flatpickr js -->
    <script src="{{ URL::asset('/assets/libs/flatpickr/flatpickr.min.js') }}"></script>

    <!-- Required datatable js -->
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>

    <!-- init js -->
    <script src="{{ URL::asset('/assets/js/pages/invoices-list.init.js') }}"></script>

@endsection
