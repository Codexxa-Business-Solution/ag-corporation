@extends('layouts.master')

@section('title') @lang('translation.Product_Master') @endsection

@section('css')

    <!-- flatpickr css -->
    <link href="{{ URL::asset('/assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css">

    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Dashboard @endslot
        @slot('title') Product Master  @endslot
    @endcomponent


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
                Session::forget('success');
            @endphp
        </div>
        @endif
                    <div class="row">
                        <div class="col-sm">
                            <!-- <div class="mb-4">
                                <button type="button" class="btn btn-light waves-effect waves-light"><i
                                        class="bx bx-plus me-1"></i> Add BOQ</button>
                            </div> -->
                        </div>
                        <div class="col-sm-auto">
                            <div class="d-flex align-items-center gap-1 mb-4">
                                <div class="mb-4">
                                    <button type="button" class="btn btn-light waves-effect waves-light">
                                        <a href="{{ route('product.create') }}" data-key="t-invoice-list">
                                        <i class="bx bx-plus me-1"></i> Add Product</a>
                                    </button>
                                </div> 
                            </div>
                        </div>
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
                                    <th > SR  NO</th>
                                    <th>Item Name</th>
                                    <th>Units</th> 
                                    <th>Category</th> 
                                    <th>SubCategory</th> 
                                    <th>Manf Name</th> 
                                    <th>Purchase Rate</th> 
                                    <th>Pur Discount</th> 
                                  	<th>Actual Rate</th> 
                                    <th style="width:200px;">Discription</th> 
                                    
                                    <th >Action</th>
                                </tr>
                                @foreach($product as $products) 

                            </thead>
                            <tbody>
                            
                                <tr>
                                    <td>
                                        <div class="form-check font-size-16">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label"></label>
                                        </div>
                                    </td>
                                    <td>{{$loop->iteration}}</td>

                                    <td>
                                    {{ $products->item_name	}}

                                    </td>
                                    <td>
                                    {{ $products->units}}

                                    </td>
                                   <td>
                                   {{ $products->category_name}}
                                    </td>
                                   <td>
                                   {{ $products->subcategory_name}}
                                    </td>
                                   <td>
                                   {{ $products->manufacturing}}
                                    </td>
                                   <td>
                                   {{ $products->purchase_rate}}

                                    </td>
                                   <td>
                                   {{ $products->purchase_discount}}
%
                                    </td>
                                   <td>
                                   {{ $products->actual_rate}}

                                    </td>
                                   <td >
                                   {{ $products->discription}}
                                    </td>
                                   
                                    <td>
                                        <div class="dropdown">
                                            <!-- <button
                                                class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                            </ul> -->

                                            <form action="{{ route('product.destroy',$products->id) }}" method="POST">

                        <a class="btn btn-primary" href="{{ route('product.edit',$products->id) }}">Edit</a>


                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                
                                
                            </tbody>
                            @endforeach

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
