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
                        <!-- <div class="mb-4">
                            <label class="form-label" for="default-input">HP </label>
                            <input class="form-control" type="text" id="default-input" 
                            placeholder="Enter HP">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="default-input">No Of Pump </label>
                            <input class="form-control" type="text" id="default-input" 
                            placeholder="Enter No Of Pump">
                        </div> -->
                        <button type="button" class="btn btn-info btn-rounded waves-effect waves-light"> 
                            <a class=" dropdown-toggle arrow-none" href="" 
                            id="topnav-dashboard" role="button" style="color:white;">
                            <!-- <i data-feather="home"></i> -->
                            Add Pump
                            </a>
                        </button>
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
