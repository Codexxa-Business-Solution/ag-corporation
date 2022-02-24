@extends('layouts.master')

@section('title') @lang('Mounting') @endsection

@section('css')

    <!-- flatpickr css -->
    <link href="{{ URL::asset('/assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css">

    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Section 1 @endslot
        @slot('title') Mounting List @endslot
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
               
                    <form action="{{ route('mounting.update',$mounting->id) }}" method="POST">

                    @method('PATCH')
                      @csrf
                   
                        <div class="mb-4">
                            <label class="form-label" for="default-input"> Mounting  </label>
                            <input class="form-control" type="text" value="{{ $mounting->mounting_name }}" 
                            name="mounting_name" id="default-input" placeholder="Enter Mounting" required>
                        </div>
                      
                        <button type="submit" class="btn btn-primary"> Edit Mounting </button>

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
