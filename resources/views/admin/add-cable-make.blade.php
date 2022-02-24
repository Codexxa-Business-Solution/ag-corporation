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
        @slot('li_1') Section 2 @endslot
        @slot('title') Cable Make Details @endslot
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
                    <form action="{{ route('cablemaketype.store') }}" method="POST">
                    @csrf
                        <div class="mb-4">
                            <label class="form-label" for="default-input">Cable Make </label>
                            <input class="form-control" type="text" name="cablemake_name" id="default-input" 
                            placeholder="Enter Cable Make" required>
                        </div>
                      
                        <button type="submit"  class="btn btn-primary">Add Cable Make Type </button>

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
