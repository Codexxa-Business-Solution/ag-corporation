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
        @slot('li_1') Components @endslot
        @slot('title') Add Components @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
               
                <div class="card-body">
                    <form>
                        <div class="mb-4">
                            <label class="form-label" for="default-input">Component Name </label>
                            <input class="form-control" type="text" id="default-input" 
                            placeholder="Enter Component Name">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="default-input">Description </label>
                            <input class="form-control" type="text" id="default-input" 
                            placeholder="Enter Description">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="default-input">Price </label>
                            <input class="form-control" type="number" id="default-input" 
                            placeholder="Enter Price">
                        </div>
                      
                        <button type="button" class="btn btn-info btn-rounded waves-effect waves-light"> 
                            <a class=" dropdown-toggle arrow-none" href="" 
                            id="topnav-dashboard" role="button" style="color:white;">
                            <!-- <i data-feather="home"></i> -->
                            Add Component
                            </a>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
               
                <div class="card-body">
                    <form>
                        <div class="mb-4">
                            <label class="form-label" for="default-input">Component Name </label>
                            <!-- <input class="form-control" type="text" id="default-input" 
                            placeholder="Enter Component Name"> -->
                            <br>
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
                       
                      
                        <button type="button" class="btn btn-info btn-rounded waves-effect waves-light"> 
                            <a class=" dropdown-toggle arrow-none" href="" 
                            id="topnav-dashboard" role="button" style="color:white;">
                            <!-- <i data-feather="home"></i> -->
                            Group of Component
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
