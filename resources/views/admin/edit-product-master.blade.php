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
                   
                
                    <form action="{{ route('product.update',$product->id) }}" method="POST">
                    @method('PATCH')
                      @csrf
                   <div class="row">
        				<div class="col-lg-12">
                            <div class="mb-4">
                                <label class="form-label" for="default-input">Item Name</label>
                                <input class="form-control" name ="item_name" value="{{ $product->item_name }}" type="text" id="default-input" 
                                placeholder="Enter Item Name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-2">
                               <div class="mb-3">
                                  <label class="form-label" for="validationCustom05">Units</label>
                                   

                                   <select name="units" class="form-control form-select" style="width:250px">
                    <option value="">Select Units</option>
                    @foreach ($unit as $key => $value)

                    <option value="{{ $value->id}}" {{ ($value->id == $product->units) ? 'selected' : '' }}> 
                        {{ $value->units}}
                    @endforeach
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
                                
                                   <select name="manf_name" class="form-control form-select" style="width:250px">
                    <option value="">Selects Manufacture name</option>
                    @foreach ($manufacture as $key => $value)
                    <option value="{{ $value->id }}">{{ $value->manufacturing }}</option>
                        <option value="{{ $value->id}}" {{ ($value->id == $product->manf_name) ? 'selected' : '' }}> 
                        {{ $value->manufacturing}}
                    @endforeach
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
                                  
                                     
                                   <select name="category" class="form-control form-select" style="width:250px">
                    <option value="">Select Category</option>
                    @foreach ($category as $key => $value)

                    <option value="{{ $value->id}}" {{ ($value->id == $product->category) ? 'selected' : '' }}> 
                        {{ $value->category_name}}
                    @endforeach
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
                                  
                                     
                                   <select name="subcategory" class="form-control form-select" style="width:250px">
                    <option value="">Select Sub Category</option>
                    @foreach ($subcategory as $key => $value)

                    <option value="{{ $value->id}}" {{ ($value->id == $product->subcategory) ? 'selected' : '' }}> 
                        {{ $value->subcategory_name}}
                    @endforeach
                </select>
                                   <div class="invalid-feedback">
                                     Please provide a Sub Category.
                                   </div>
                                 </div>
                             </div>
                        </div>

                        <!-- <div class="col-lg-6">
                           <div class="mb-2">
                               <div class="mb-3">
                                  <label class="form-label" name="subcategory" for="validationCustom05">Sub Category</label>
                                   <select name="subcategory"  required class="form-control form-select">
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
                        </div> -->
                        
                        <div class="col-lg-6">
                          <div class="mb-4">
                                <label class="form-label" for="default-input">Purchase Rate </label>
                                <input class="form-control" name="purchase_rate"  value="{{ $product->purchase_rate }}" type="number" id="default-input" 
                                placeholder="Enter Rate">
                           </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="mb-4">
                                <label class="form-label" for="default-input">Purchase Discount </label>
                                <input class="form-control"  name="purchase_discount" value="{{ $product->purchase_discount }}" type="number" id="default-input" 
                                placeholder="Enter Discount in %">
                           </div>
                        </div>
                        <div class="col-lg-12">
                           <div class="mb-4">
                                <label class="form-label" for="default-input">Actual Rate </label>
                                <input class="form-control"  name="actual_rate"  value="{{ $product->actual_rate }}" type="number" id="default-input" value=""
                                placeholder=" Actual Rate " >

                           </div>
                        </div>
                        <div class="col-lg-12">
                           <div class="mb-4">
                                <label class="form-label" for="default-input"> Discription </label>
                                <textarea class="form-control" name="discription"  type="text" id="default-input" 
                                       placeholder="Enter Discription"> {{$product->discription}} </textarea>
                           </div>
                        </div>
                       
                      </div>
                      <!-- <button type="submit" class="btn btn-info btn-rounded waves-effect waves-light"> 
                            <a class=" dropdown-toggle arrow-none" href="" 
                            id="topnav-dashboard" role="button" style="color:white;">
                            Add Product
                            </a>
                        </button> -->
                        <button type="submit" class="btn btn-info">  Update Product</button>

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
