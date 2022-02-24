@extends('layouts.master')

@section('title') @lang('translation.BOQ_List') @endsection

@section('css')

    <!-- flatpickr css -->
    <link href="{{ URL::asset('/assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css">

    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Incomer Selection @endslot
        @slot('title') Switch Make List @endslot
    @endcomponent


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm">
                            <!-- <div class="mb-4">
                                <button type="button" class="btn btn-light waves-effect waves-light"><i
                                        class="bx bx-plus me-1"></i> Add Switch Make</button>
                            </div> -->
                        </div>
                        <div class="col-sm-auto">
                            <div class="d-flex align-items-center gap-1 mb-4">
                            <div class="mb-4">
                                <button type="button" class="btn btn-light waves-effect waves-light">
                                    <a href="{{ route('switchmake.create') }}" data-key="t-invoice-list">
                                    <i class="bx bx-plus me-1"></i> Add Switch Make</a>
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
                                    <th style="width: 120px;">Switch Make ID</th>
                                    <th>Switch Make Type</th>
                                    <!-- <th>Status</th> -->
                                    <th style="width: 90px;">Action</th>
                                </tr>
                            </thead>
                            @foreach($switchmake as $switchmakes) 
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
                                    {{ $switchmakes->switchmakes_name }}

                                    </td>
                                    
                                    <td>
                                            <div class="dropdown">
                                                      
                                            <form action="{{ route('switchmake.destroy',$switchmakes->id) }}" method="POST">

                                                <a class="btn btn-primary" href="{{ route('switchmake.edit',$switchmakes->id) }}">Edit</a>


                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger">Delete</button>

                                            </form>
                                           
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
