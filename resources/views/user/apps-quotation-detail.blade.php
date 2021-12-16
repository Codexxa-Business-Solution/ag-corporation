@extends('layouts.master')
@section('title') @lang('translation.Quotation_Detail') @endsection
@section('content')

<style>
    h3{
        font-size: 14px;
    }
    .table-bordered, .table-bordered td, .table-bordered th {
    border: 1px solid #e9e9ef;
    padding: 2px;
}
</style>

    <!-- <body data-layout="horizontal"> -->

    <!-- start page title -->
    @component('components.breadcrumb')
        @slot('li_1') Dashboard @endslot
        @slot('title') Quotation Detail @endslot
    @endcomponent
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="invoice-title">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1" style="text-align:center;">
                                <div class="mb-4">
                                <img src="assets/images/ag-logo-new.jpeg" alt="" style="width: 165px;height: 112px;">
                                    <p style="font-weight: bold;font-size: 14px;margin: 0px;">H.No.161/2,Pune Nashik Highway Opposite Shell Petrol Pump,
                                            Village-Kuruli, Tal-Khed, Dist-Pune, Pin -410501, 
                                    </p>
                                    <p style="font-weight: bold;font-size: 14px;margin: 0px;">Tel: 020- 65115101, Email- agcorp.pune@gmail.com</p>  
                                    <p style="font-weight: bold;font-size: 14px;margin: 0px;">Web: www.agcorporation.in</p> 
                                    <div style="background:blue;color:white;">
                                        <ul>
                                            <li style="display: inline;margin-right: 15px;">
                                            <i class="fab fa-bandcamp" aria-hidden="true" style="color:white;"></i>
                                            Pump Suppliers</li>
                                            <li style="display: inline;margin-right: 15px;">
                                            <i class="fab fa-bandcamp" aria-hidden="true" style="color:white;"></i>
                                            Control Panel Manufacturer</li>
                                            <li style="display: inline;margin-right: 15px;">
                                            <i class="fab fa-bandcamp" aria-hidden="true" style="color:white;"></i>
                                            Electrical Contractor (Govt.)</li>
                                            <li style="display: inline;margin-right: 15px;">
                                            <i class="fab fa-bandcamp" aria-hidden="true" style="color:white;"></i>
                                            Energy Saving Projects</li>
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                            <!-- <div class="flex-shrink-0">
                                <div class="mb-4">
                                    <h4 class="float-end font-size-16">Quotation # 12345</h4>
                                </div>
                            </div> -->
                        </div>
                        <h2 style="text-align:center;">Quotation For Electrical Control Panel</h2>
                        <div class="mb-4">
                            <h4 class="float-end font-size-16">Quotation # 12345</h4>
                        </div>
                        <h5 class="font-size-14 mb-2">Richard Saul</h5>
                        <p class="mb-1">1874 County Line Road City, FL 33566</p>
                        <p class="mb-1">Maharashtra</p>
                        <!-- <p class="mb-1"><i class="mdi mdi-email align-middle me-1"></i> abc@123.com</p> -->
                        <p class="mb-1"><i class="mdi mdi-phone align-middle me-1"></i> 012-345-6789</p>
                        <p class="mb-1">Project Name</p>
                        <p>Panel Cat No. </p>
                        
                    </div>
                    <hr class="my-4">
                    <div class="row">
                    <div class="col-sm-12">

                        <!-- <div class="card">
                                    <div class="card-header"> -->
                                    <h4 class="card-title">Pump Catalog Selection</h4>
                                    
                                    <!-- </div> -->
                                    <!-- <div class="card-body p-4"> -->
                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>PUMP TYPE</th>
                                                        <th>JOCKEY</th>
                                                        <th>HYDRANT</th>
                                                        <th>STANDBY</th>
                                                        <th>SPRINKLER</th>
                                                        <th>ENGINE</th>
                                                        <th>BOOSTER</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">HP</th>
                                                        <td>
                                                            <label>-</label>
                                                        <!-- <input class="form-control" type="text"  id="example-text-input" readonly>  -->
                                                        </td>
                                                        <td>
                                                        <label>-</label>
                                                        </td>
                                                        <td>
                                                        <label>-</label>
                                                        </td>
                                                        <td>
                                                        <label>-</label>
                                                        </td>
                                                        <td>
                                                        <label>-</label>
                                                        </td>
                                                        <td>
                                                        <label>-</label>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <th scope="row">No. Of PUMP</th>
                                                        <td>
                                                        <label>-</label>
                                                        </td>
                                                        <td>
                                                        <label>-</label>
                                                        </td>
                                                        <td>
                                                        <label>-</label>
                                                        </td>
                                                        <td>
                                                        <label>-</label>
                                                        </td>
                                                        <td>
                                                        <label>-</label>
                                                        </td>
                                                        <td>
                                                        <label>-</label>
                                                        </td>
                                                    </tr>
                                                
                                                </tbody>
                                            </table>
                                        </div>
                                   
                                    <!-- </div>
                                </div> -->
                    </div>
                    <div class="col-sm-12">
                        <br>
                        <h4 class="card-title">Panel Incomer Selection</h4>
                        <div class="table-responsive">
                                            <table class="table mb-0">

                                                <thead class="table-light">
                                                    <tr>
                                                        <th>INDICATION</th>
                                                        <th>VOLT METER</th>
                                                        <th>AMMERTER</th>
                                                        <th>SPP</th>
                                                        <th>HOOTER</th>
                                                        <th>FEEDER AMMETER</th>
                                                        <th>SWITCH MAKE</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">YES</th>
                                                        <td>
                                                        <label>-</label>
                                                        </td>
                                                        <td>
                                                        <label>-</label>
                                                        </td>
                                                        <td>
                                                        <label>-</label>
                                                        </td>
                                                        <td>
                                                        <label>-</label>
                                                        </td>
                                                        <td>
                                                        <label>-</label>
                                                        </td>
                                                        <td>
                                                        <label>-</label>
                                                        </td>

                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                    </div>
                    <div class="col-sm-12">
                        <br>
                        <h4 class="card-title">Section 1</h4>
                        <div class="table-responsive">
                                            <table class="table mb-0">

                                                <thead class="table-light">
                                                    <tr>
                                                        <th>PANEL LOCATION</th>
                                                        <th>PANEL COLOUR</th>
                                                        <th>BUSBAR</th>
                                                        <th>CABLE ENTRY</th>
                                                        <th>FEEDER AMMETER</th>
                                                        <th>TYPE1 / TYPE2</th>
                                                       

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        
                                                        <td>
                                                        <label>-</label>
                                                        </td>
                                                        <td>
                                                        <label>-</label>
                                                        </td>
                                                        <td>
                                                        <label>-</label>
                                                        </td>
                                                        <td>
                                                        <label>-</label>
                                                        </td>
                                                        <td>
                                                        <label>-</label>
                                                        </td>
                                                        <td>
                                                        <label>-</label>
                                                        </td>

                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                    </div>
                    <div class="col-sm-12">
                        <br>
                        <h4 class="card-title">Section 2</h4>
                        <div class="table-responsive">
                                            <table class="table mb-0">

                                                <thead class="table-light">
                                                    <tr>
                                                        <th>CABLE MAKE</th>
                                                        <th>ACCESS</th>
                                                        <th>MOUNTING</th>
                                                        <th>PANEL TYPE</th>
                                                    
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        
                                                        <td>
                                                        <label>-</label>
                                                        </td>
                                                        <td>
                                                        <label>-</label>
                                                        </td>
                                                        <td>
                                                        <label>-</label>
                                                        </td>
                                                        <td>
                                                        <label>-</label>
                                                        </td>
                                                       
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                    </div>
                    <div class="col-sm-12">
                        <!-- <br> -->
                        <div class="row">
                        <div class="col-sm-8"></div>
                            <div class="col-sm-4" >
                            <div class="p-4 border rounded">
                                <div class="table-responsive">
                                    <table class="table table-nowrap align-middle mb-0">
                                        <thead>
                                          
                                        </thead>
                                        <tbody>
                                            

                                            <tr>
                                                <th scope="row" colspan="2" class="text-end">Sub Total</th>
                                                <td class="text-end">$998.00</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" colspan="2" class="border-0 text-end">
                                                    Tax</th>
                                                <td class="border-0 text-end">$12.00</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" colspan="2" class="border-0 text-end">Total Panel Price</th>
                                                <td class="border-0 text-end">
                                                    <h4 class="m-0">$1010.00</h4>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="d-print-none mt-3">
                                <div class="float-end">
                                    <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light me-1"><i
                                            class="fa fa-print"></i></a>
                                    <a href="#" class="btn btn-primary w-md waves-effect waves-light">Send</a>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    </div>

                    <!--  <div class="py-2 mt-3">
                        <h5 class="font-size-15">Order summary</h5>
                    </div> 
                    <div class="p-4 border rounded">
                        <div class="table-responsive">
                            <table class="table table-nowrap align-middle mb-0">
                                <thead>
                                    <tr>
                                        <th style="width: 70px;">No.</th>
                                        <th>Item</th>
                                        <th class="text-end" style="width: 120px;">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">01</th>
                                        <td>
                                            <h5 class="font-size-15 mb-1">Minia</h5>
                                            <p class="font-size-13 text-muted mb-0">Bootstrap 5 Admin Dashboard </p>
                                        </td>
                                        <td class="text-end">$499.00</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">02</th>
                                        <td>
                                            <h5 class="font-size-15 mb-1">Skote</h5>
                                            <p class="font-size-13 text-muted mb-0">Bootstrap 5 Admin Dashboard </p>
                                        </td>
                                        <td class="text-end">$499.00</td>
                                    </tr>

                                    <tr>
                                        <th scope="row" colspan="2" class="text-end">Sub Total</th>
                                        <td class="text-end">$998.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" colspan="2" class="border-0 text-end">
                                            Tax</th>
                                        <td class="border-0 text-end">$12.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" colspan="2" class="border-0 text-end">Total</th>
                                        <td class="border-0 text-end">
                                            <h4 class="m-0">$1010.00</h4>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="d-print-none mt-3">
                        <div class="float-end">
                            <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light me-1"><i
                                    class="fa fa-print"></i></a>
                            <a href="#" class="btn btn-primary w-md waves-effect waves-light">Send</a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
<br><br><br>
    <div class="row">
        <div class="col">
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0" style="padding:2px;">

                            <thead>
                                <tr>
                                    <!-- <th> -->
                                       <h3> Terms & Condition</h3>
                                    <!-- </th> -->
                                    <!-- <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                
                                <tr>
                                    <td scope="row-2">
                                        <h3>1. Delivery Period - </h3>
                                        
                                    </td>
                                       
                                    <td>
                                    <p>Within 2-3 week from the date of Techno-Commercial clear purchase Order.</p>
                                    </td>
                                   
                                </tr>
                                <tr>
                                    <th scope="row-2"><h3>2. GST Tax -</h3></th>
                                    <td>
                                        <p>Extra on basic price</p>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <th scope="row"><h3>3. Payment Term -</h3></th>
                                    <td>
                                        <p>50% advance, balance against PI prior to dispatch.</p>
                                    </td>
                                   
                                </tr>
                                <tr>
                                    <th scope="row"><h3>4. Validity -</h3></th>
                                    <td>
                                    <p>Up to 15 days from the data of quotation </p>
                                    </td>
                                   
                                </tr>
                                <tr>
                                    <th scope="row"><h3>5. Warranty -</h3></th>
                                    <td>
                                        <p>12 month from the date of supply against Manufacturing defect.
                                        </p>
                                    </td>
                                   
                                </tr>
                                <!-- <tr>
                                    <td>
                                        <p>We hope our offer is fullfil your requirement & look forward to your valued order.</p>
                                    </td>
                                   
                                </tr>
                                <tr>
                                    <td>
                                        <p>Do revert back for any quarries.</p>
                                    </td>
                                   
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                    <div style="border:1px solid #e6e3e3;"> 
                        &nbsp;<p> - We hope our offer is fullfil your requirement & look forward to
                             your valued order.</p>
                        <p> - Do revert back for any quarries.</p>
                    </div>
        </div>
    </div>
    <br> <br> <br>
    <div class="row">
        <div class="col-lg-2">
            <p>Thanking You,</p>
            <p>Your Sincerely,</p>
        </div>
        <div class="col-lg-2">

        </div>
    </div>
@endsection
