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
        @slot('li_1') Product Master @endslot
        @slot('title') Manufacturing List @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
               
                <div class="card-body">
                    <form action="{{ route('manufacture.store') }}" method="POST">
                    @csrf
                   
                        <div class="mb-4">
                            <label class="form-label" for="default-input">Manufacturing Name </label>
                            <input class="form-control" type="text" name="manufacturing"id="default-input" 
                            placeholder="Enter Manufacturing Name">
                        </div>
                      
                        <!-- <button type="submit" class="btn btn-info btn-rounded waves-effect waves-light"> 
                            <a class=" dropdown-toggle arrow-none" href="" 
                            id="topnav-dashboard" role="button" style="color:white;">
                            Add Manufacture
                            </a>
                        </button> -->
                        <button type="submit" class="btn btn-info"> Add Manufacture</button>

                    </form>
                </div>
            </div>
        </div>
   
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">

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
                                    <th style="width: 80px;"> ID</th>
                                    <th>Manufacturing Name</th> 
                                    <th style="width: 90px;">Action</th>
                                </tr>
                            </thead>
                            @foreach($manufacture as $manufactures) 

                            <tbody>

                                <tr>
                                    <td>
                                        <div class="form-check font-size-16">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label"></label>
                                        </div>
                                    </td>

                                    <!-- <td><a href="javascript: void(0);" class="text-dark fw-medium">#15</a> </td> -->
                                    <td>{{$loop->iteration}}</td>

                                   <td>
                                   {{ $manufactures->manufacturing }}

                                    </td>
                                 
                                    <td>
                                        <div class="dropdown">
                                            <button
                                                class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                            <form action="{{ route('manufacture.destroy',$manufactures->id) }}" method="POST">

                                                <!-- <li><a class="dropdown-item" href="{{ route('manufacture.edit',$manufactures->id) }}">Edit</a></li>
                                                <li><a class="dropdown-item" href="{{ route('manufacture.destroy',$manufactures->id) }}">Delete</a></li> -->

                                                <a class="btn btn-primary" href="{{ route('manufacture.edit',$manufactures->id) }}">Edit</a>


                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger">Delete</button>
                                               

                        
                             </form>
                                            </ul>
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
