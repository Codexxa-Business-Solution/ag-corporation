@extends('layouts.master')

@section('title') @lang('Incomer Selection') @endsection

@section('css')

    <!-- flatpickr css -->
    <link href="{{ URL::asset('/assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css">

    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Incomer Selection @endslot
        @slot('title') Edit Ammeter  @endslot
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
               
                    <form action="{{ route('ammeter.update',$ammeter->id) }}" method="POST">

                    @method('PATCH')
                      @csrf
                   
                        <div class="mb-4">
                            <label class="form-label" for="default-input"> Ammeter  </label>
                            <input class="form-control" type="text" value="{{ $ammeter->ammeters_name }}" 
                            name="ammeters_name" id="default-input" placeholder="Enter Ammeter" required>
                        </div>
                      
                        <!-- <button type="submit" class="btn btn-info btn-rounded waves-effect waves-light"> 
                            <a class=" dropdown-toggle arrow-none" href="" 
                            id="topnav-dashboard" role="button" style="color:white;">
                            Add Units
                            </a>
                        </button> -->
                        <button type="submit" class="btn btn-primary"> Edit Ammeter</button>

                    </form>

                        
                </div>
            </div>
        </div>
   
           
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
