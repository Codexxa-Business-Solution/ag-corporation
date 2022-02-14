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
        @slot('li_1') Product Master @endslot
        @slot('title')  Add Product Master @endslot
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
                      <div class="row">
        				<div class="col-lg-12">
                            <div class="mb-4">
                                <label class="form-label" for="default-input">Item Name</label>
                                <input class="form-control" type="text" id="default-input" 
                                placeholder="Enter Item Name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-2">
                               <div class="mb-3">
                                  <label class="form-label" for="validationCustom05">Units</label>
                                   <select required class="form-control form-select">
                                      <option value=""> Select Units </option>
                                      <option value=""> KG </option>
                                      <option value=""> MTR </option>
                                      <option value=""> No </option>
                                   </select>
                                   <div class="invalid-feedback">
                                     Please provide a units.
                                   </div>
                                 </div>
                             </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="mb-2">
                               <div class="mb-3">
                                  <label class="form-label" for="validationCustom05">Manufacturing Name</label>
                                   <select required class="form-control form-select">
                                      <option value="">Selects Manufacture name</option>
                                      <option value=""> AGC </option>
                                      <option value=""> Bussmann </option>
                                      <option value=""> ESBEE </option>
                                   </select>
                                   <div class="invalid-feedback">
                                     Please provide a Manf. Name.
                                   </div>
                                 </div>
                             </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-2">
                               <div class="mb-3">
                                  <label class="form-label" for="validationCustom05"> Category</label>
                                   <select required class="form-control form-select">
                                      <option value="">Select Category </option>
                                      <option value=""> Cable </option>
                                      <option value=""> Copper Lug</option>
                                      <option value=""> CT</option>
                                   </select>
                                   <div class="invalid-feedback">
                                     Please provide a Category.
                                   </div>
                                 </div>
                             </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="mb-2">
                               <div class="mb-3">
                                  <label class="form-label" for="validationCustom05">Sub Category</label>
                                   <select required class="form-control form-select">
                                      <option value="">Selects SubCategory</option>
                                      <option value=""> AL Busbar </option>
                                      <option value=""> Ammeter</option>
                                      <option value=""> ARM Cable LT</option>
                                   </select>
                                   <div class="invalid-feedback">
                                     Please provide a SubCategory.
                                   </div>
                                 </div>
                             </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="mb-4">
                                <label class="form-label" for="default-input">Purchase Rate </label>
                                <input class="form-control" type="number" id="default-input" 
                                placeholder="Enter Rate">
                           </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="mb-4">
                                <label class="form-label" for="default-input">Purchase Discount </label>
                                <input class="form-control" type="number" id="default-input" 
                                placeholder="Enter Discount in %">
                           </div>
                        </div>
                        <div class="col-lg-12">
                           <div class="mb-4">
                                <label class="form-label" for="default-input">Actual Rate </label>
                                <input class="form-control" type="number" id="default-input" value=""
                                placeholder=" Actual Rate " readonly>
                           </div>
                        </div>
                        <div class="col-lg-12">
                           <div class="mb-4">
                                <label class="form-label" for="default-input"> Discription </label>
                                <textarea class="form-control" type="text" id="default-input" 
                                          placeholder="Enter Discription"></textarea>
                           </div>
                        </div>
                       
                      </div>
                      <button type="button" class="btn btn-info btn-rounded waves-effect waves-light"> 
                            <a class=" dropdown-toggle arrow-none" href="" 
                            id="topnav-dashboard" role="button" style="color:white;">
                            <!-- <i data-feather="home"></i> -->
                            Add Product
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
