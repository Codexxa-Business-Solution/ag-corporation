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
        @slot('li_1') Pump Catalog Selection @endslot
        @slot('title') HP Details @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                    @php
                        Session::forget('success');
                    @endphp
                </div>
                @endif
 
                <div class="card-body">
                    <form action="{{ route('hp.store') }}" method="POST">
                    @csrf
                        <div class="mb-4">
                            <label class="form-label" for="default-input">HP </label>
                            <input class="form-control" type="text" name="hp_name" id="default-input" 
                            placeholder="Enter HP" required>
                        </div>
                      
                        <!-- <button type="button" class="btn btn-info btn-rounded waves-effect waves-light"> 
                            <a class=" dropdown-toggle arrow-none" href="" 
                            id="topnav-dashboard" role="button" style="color:white;">
                           
                            Add HP
                            </a>
                        </button> -->
                        <button type="submit"  class="btn btn-primary"> Add HP</button>
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
                                    <th>HP </th> 
                                    <th style="width: 90px;">Action</th>
                                </tr>
                            </thead>
                            @foreach($hp as $hps) 

                            <tbody>
                            
                                <tr>
                                    <td>
                                        <div class="form-check font-size-16">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label"></label>
                                        </div>
                                    </td>

                                    <!-- <td><a href="javascript: void(0);" class="text-dark fw-medium"></a> </td> -->
                                   
                                    <td>{{$loop->iteration}}</td>

                                   <td>
                                   {{ $hps->hp_name }}

                                    </td>
                                 
                                    <td>
                                        <div class="dropdown">
                                            <!-- <button
                                                class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end"> -->
                                                
                                                <form action="{{ route('hp.destroy',$hps->id) }}" method="POST">

                                            <a class="btn btn-primary" href="{{ route('hp.edit',$hps->id) }}">Edit</a>


                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger">Delete</button>
                        
                                    </form>
                                            <!-- </ul> -->
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

    @endsection

@section('script')

    <!-- flatpickr js -->
    <script src="{{ URL::asset('/assets/libs/flatpickr/flatpickr.min.js') }}"></script>

    <!-- Required datatable js -->
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>

    <!-- init js -->
    <script src="{{ URL::asset('/assets/js/pages/invoices-list.init.js') }}"></script>

@endsection
