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
        @slot('li_1') Dashboard @endslot
        @slot('title') Add System User  @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
               
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="example-text-input" class="form-label">User Name </label>
                            <input class="form-control" type="text" placeholder="Name" id="example-text-input">
                        </div>
                        <div class="mb-3">
                            <label for="example-tel-input" class="form-label">Contact Person</label>
                            <input class="form-control" type="tel" placeholder="1-(555)-555-5555" id="example-tel-input">
                         </div>
                        <div class="row">
                            <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="username" class="form-label">Username</label>
                                                            <input id="name" type="text" placeholder="Enter Email As Username"  class="form-control @error('name') is-invalid @enderror" name="name"
                                                            value="{{ old('name') }}" required autocomplete="name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="userpassword" class="form-label">Password</label>
                                                            <input id="password" type="password" placeholder="Enter Password"
                                                            class="form-control @error('password') is-invalid @enderror"
                                                            name="password" required autocomplete="new-password">
                                                        </div>
                                                    </div>
                                    <div class="col-md-6">
                                    <div class="mb-3">
                                     <label class="form-label" for="validationCustom03">City</label>
                                                            <input type="text" class="form-control" id="validationCustom03" placeholder="City"
                                                                required>
                                                            <div class="invalid-feedback">
                                                                Please provide a valid city.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="validationCustom04">State</label>
                                                            <input type="text" class="form-control" id="validationCustom04" placeholder="State"
                                                                required>
                                                            <div class="invalid-feedback">
                                                                Please provide a valid state.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="validationCustom05">Zip</label>
                                                            <input type="text" class="form-control" id="validationCustom05" 
                                                            placeholder="Zip"
                                                                required>
                                                            <div class="invalid-feedback">
                                                                Please provide a valid zip.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="validationCustom05">Role</label>
                                                            <select required class="form-control form-select">
                                                                <option value="">-----</option>
                                                                <option value="regional">Regional Admin</option>
                                                                <option value="employee">Employee</option>
                                                                <option value="customer">Customer</option>
                                                            </select>
                                                            <div class="invalid-feedback">
                                                                Please provide a Role.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
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
