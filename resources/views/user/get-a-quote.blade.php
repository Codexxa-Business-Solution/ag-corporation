@extends('layouts.master')

@section('title') @lang('translation.Dashboard') @endsection

@section('css')

    <link href="{{ URL::asset('assets/libs/jquery-vectormap/jquery-vectormap.min.css') }}" rel="stylesheet"
        type="text/css" />

        <!-- <link href="{{ URL::asset('assets/css/step-form.css') }}" rel="stylesheet"
        type="text/css" /> -->
        
        <style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
  margin: 2px auto;
  font-family: Raleway;
  padding: 2px;
  width: 100%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4ba6ef;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
  border-radius: 25px;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4ba6ef;
}
</style>

@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Dashboard @endslot
        @slot('title') Get A Quote @endslot
    @endcomponent


 

    <!-- tab section -->
    <!-- <div class="row">
        <div class="col-lg-10"></div>
        <div class="col-lg-12">
            
                    <div class="tab-content text-muted">
                        <div class="tab-pane active" id="home3" role="tabpanel">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Requisition & Technical Data Sheet for Starter Panel Manufacturing.</h4>
                                    </div>
                                    <div class="card-body p-4">

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Customer Name </label>
                                                        <input class="form-control" type="text" placeholder="Name" id="example-text-input">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="validationCustom03">City</label>
                                                            <input type="text" class="form-control" id="validationCustom03" placeholder="City"
                                                                required>
                                                            <div class="invalid-feedback">
                                                                Please provide a valid city.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="validationCustom04">State</label>
                                                            <input type="text" class="form-control" id="validationCustom04" placeholder="State"
                                                                required>
                                                            <div class="invalid-feedback">
                                                                Please provide a valid state.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="validationCustom05">Zip</label>
                                                            <input type="text" class="form-control" id="validationCustom05" 
                                                            placeholder="Zip"
                                                                required>
                                                            <div class="invalid-feedback">
                                                                Please provide a valid zip.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="mb-3">
                                                        <label for="example-search-input" class="form-label">Project Name</label>
                                                        <input class="form-control" type="text" placeholder="Project Name"
                                                            id="example-search-input">
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                    <div>
                                                        <label for="example-datetime-local-input" class="form-label">Date</label>
                                                        <input class="form-control" type="datetime-local" value="2019-08-19T13:45:00"
                                                            id="example-datetime-local-input">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-tel-input" class="form-label">Contact Person</label>
                                                        <input class="form-control" type="tel" placeholder="1-(555)-555-5555" id="example-tel-input">
                                                    </div>
                                                    <div>
                                                        <label for="example-datetime-local-input" class="form-label">Delivery Date</label>
                                                        <input class="form-control" type="datetime-local" value="2019-08-19T13:45:00"
                                                            id="example-datetime-local-input">
                                                    </div>
                                                
                                                    <div class="mb-3">
                                                        <label for="example-number-input" class="form-label">Panel SL Number</label>
                                                        <input class="form-control" type="number" placeholder="42" id="example-number-input">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-number-input" class="form-label">Panel Price</label>
                                                        <input class="form-control" type="number" placeholder="3,33,333" id="example-number-input">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-number-input" class="form-label">Credit Days</label>
                                                        <input class="form-control" type="number" placeholder="42" id="example-number-input">
                                                    </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="flex-shrink-0">
                            <ul class="nav justify-content-end nav-pills card-header-pills" role="tablist">
                                <li class="nav-item">
                                   
                                    <button type="button" class="btn btn-info btn-rounded waves-effect 
                                    waves-light" style="width: 91px;bottom: 10px;">
                                    <a  data-bs-toggle="tab" href="#profile3" role="tab" style="color:white;">
                                        <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                        <span class="d-none d-sm-block">NEXT</span>
                                    </a></button>
                                </li>
                            </ul>
                        </div>
                        </div>

                        <div class="tab-pane" id="profile3" role="tabpanel">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Pump Catalog Selection</h4>
                                    
                                    </div>
                                    <div class="card-body p-4">
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
                                                            <select required class="form-control form-select">
                                                                <option value="">-----</option>
                                                                <option value="wr">Writing</option>
                                                                <option value="ph">Photography</option>
                                                                <option value="cy">Cycling</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select required class="form-control form-select">
                                                                <option value="">-----</option>
                                                                <option value="wr">Writing</option>
                                                                <option value="ph">Photography</option>
                                                                <option value="cy">Cycling</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select required class="form-control form-select">
                                                                <option value="">-----</option>
                                                                <option value="wr">Writing</option>
                                                                <option value="ph">Photography</option>
                                                                <option value="cy">Cycling</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select required class="form-control form-select">
                                                                <option value="">-----</option>
                                                                <option value="wr">Writing</option>
                                                                <option value="ph">Photography</option>
                                                                <option value="cy">Cycling</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select required class="form-control form-select">
                                                                <option value="">-----</option>
                                                                <option value="wr">Writing</option>
                                                                <option value="ph">Photography</option>
                                                                <option value="cy">Cycling</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select required class="form-control form-select">
                                                                <option value="">-----</option>
                                                                <option value="wr">Writing</option>
                                                                <option value="ph">Photography</option>
                                                                <option value="cy">Cycling</option>
                                                            </select>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <th scope="row">No. Of PUMP</th>
                                                        <td>
                                                            <select required class="form-control form-select">
                                                                <option value="">-----</option>
                                                                <option value="wr">Writing</option>
                                                                <option value="ph">Photography</option>
                                                                <option value="cy">Cycling</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select required class="form-control form-select">
                                                                <option value="">-----</option>
                                                                <option value="wr">Writing</option>
                                                                <option value="ph">Photography</option>
                                                                <option value="cy">Cycling</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select required class="form-control form-select">
                                                                <option value="">-----</option>
                                                                <option value="wr">Writing</option>
                                                                <option value="ph">Photography</option>
                                                                <option value="cy">Cycling</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select required class="form-control form-select">
                                                                <option value="">-----</option>
                                                                <option value="wr">Writing</option>
                                                                <option value="ph">Photography</option>
                                                                <option value="cy">Cycling</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select required class="form-control form-select">
                                                                <option value="">-----</option>
                                                                <option value="wr">Writing</option>
                                                                <option value="ph">Photography</option>
                                                                <option value="cy">Cycling</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select required class="form-control form-select">
                                                                <option value="">-----</option>
                                                                <option value="wr">Writing</option>
                                                                <option value="ph">Photography</option>
                                                                <option value="cy">Cycling</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                
                                                </tbody>
                                            </table>
                                        </div>
                                   
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Panel Incomer Selection</h4>
                                    
                                    </div>
                                    <div class="card-body p-4">
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
                                                            <select required class="form-control form-select">
                                                                <option value="">-----</option>
                                                                <option value="wr">Writing</option>
                                                                <option value="ph">Photography</option>
                                                                <option value="cy">Cycling</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select required class="form-control form-select">
                                                                <option value="">-----</option>
                                                                <option value="wr">Writing</option>
                                                                <option value="ph">Photography</option>
                                                                <option value="cy">Cycling</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select required class="form-control form-select">
                                                                <option value="">-----</option>
                                                                <option value="wr">Writing</option>
                                                                <option value="ph">Photography</option>
                                                                <option value="cy">Cycling</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select required class="form-control form-select">
                                                                <option value="">-----</option>
                                                                <option value="wr">Writing</option>
                                                                <option value="ph">Photography</option>
                                                                <option value="cy">Cycling</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select required class="form-control form-select">
                                                                <option value="">-----</option>
                                                                <option value="wr">Writing</option>
                                                                <option value="ph">Photography</option>
                                                                <option value="cy">Cycling</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select required class="form-control form-select">
                                                                <option value="">-----</option>
                                                                <option value="wr">Writing</option>
                                                                <option value="ph">Photography</option>
                                                                <option value="cy">Cycling</option>
                                                            </select>
                                                        </td>

                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                   
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="flex-shrink-0">
                            <ul class="nav justify-content-end nav-pills card-header-pills" role="tablist">
                                <li class="nav-item">
                                
                                <button type="button" class="btn btn-info btn-rounded waves-effect 
                                waves-light" style="width: 91px;bottom: 10px;"
                                data-bs-toggle="tab" href="#home3" role="tab">BACK</button>
                                </li>
                                <button type="button" class="btn btn-info btn-rounded waves-effect 
                                waves-light" style="width: 91px;bottom: 10px;"
                                data-bs-toggle="tab" href="#messages3" role="tab">NEXT</button>
                                </li>
                            </ul>
                        </div>
                        </div>
                        <div class="tab-pane" id="messages3" role="tabpanel">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                   
                                    <div class="card-body p-4">

                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">PANEL LOCATION</label>
                                                    <select required class="form-control form-select">
                                                            <option value="">-----</option>
                                                            <option value="wr">Writing</option>
                                                            <option value="ph">Photography</option>
                                                            <option value="cy">Cycling</option>
                                                    </select>
                                                </div>
                                                
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">PANEL COLOUR</label>
                                                    <select required class="form-control form-select">
                                                            <option value="">-----</option>
                                                            <option value="wr">Writing</option>
                                                            <option value="ph">Photography</option>
                                                            <option value="cy">Cycling</option>
                                                    </select>
                                                </div>
                                                
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">BUSBAR</label>
                                                    <select required class="form-control form-select">
                                                            <option value="">-----</option>
                                                            <option value="wr">Writing</option>
                                                            <option value="ph">Photography</option>
                                                            <option value="cy">Cycling</option>
                                                    </select>
                                                </div>
                                                
                                            </div>

                                            <div class="col-lg-3">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">CABLE ENTRY</label>
                                                    <select required class="form-control form-select">
                                                            <option value="">-----</option>
                                                            <option value="wr">Writing</option>
                                                            <option value="ph">Photography</option>
                                                            <option value="cy">Cycling</option>
                                                    </select>
                                                </div>
                                                
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">FEEDER AMMETER</label>
                                                    <select required class="form-control form-select">
                                                            <option value="">-----</option>
                                                            <option value="wr">Writing</option>
                                                            <option value="ph">Photography</option>
                                                            <option value="cy">Cycling</option>
                                                    </select>
                                                </div>
                                                
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">TYPE1 / TYPE2</label>
                                                    <select required class="form-control form-select">
                                                            <option value="">-----</option>
                                                            <option value="wr">Writing</option>
                                                            <option value="ph">Photography</option>
                                                            <option value="cy">Cycling</option>
                                                    </select>
                                                </div>
                                                
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    
                                    <div class="card-body p-4">

                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">CABLE MAKE</label>
                                                    <select required class="form-control form-select">
                                                            <option value="">-----</option>
                                                            <option value="wr">Writing</option>
                                                            <option value="ph">Photography</option>
                                                            <option value="cy">Cycling</option>
                                                    </select>
                                                </div>
                                                
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">ACCESS</label>
                                                    <select required class="form-control form-select">
                                                            <option value="">-----</option>
                                                            <option value="wr">Writing</option>
                                                            <option value="ph">Photography</option>
                                                            <option value="cy">Cycling</option>
                                                    </select>
                                                </div>
                                                
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">MOUNTING</label>
                                                    <select required class="form-control form-select">
                                                            <option value="">-----</option>
                                                            <option value="wr">Writing</option>
                                                            <option value="ph">Photography</option>
                                                            <option value="cy">Cycling</option>
                                                    </select>
                                                </div>
                                                
                                            </div>

                                            <div class="col-lg-3">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">PANEL TYPE</label>
                                                    <select required class="form-control form-select">
                                                            <option value="">-----</option>
                                                            <option value="wr">Writing</option>
                                                            <option value="ph">Photography</option>
                                                            <option value="cy">Cycling</option>
                                                    </select>
                                                </div>
                                                
                                            </div>
                                            

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body p-4">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label"> REMARKS / SPECIAL INSTRUCTIONS </label>
                                                    <textarea class="form-control" type="text" placeholder="Name"
                                                    id="example-text-input"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-10"></div>
                            <div class="col-lg-2">
                                <button type="button" class="btn btn-info btn-rounded waves-effect 
                                waves-light" style="width: 191px;bottom: 10px;">Submit</button>
                            
                            </div>
                        </div>
                            <div class="flex-shrink-0">
                            <ul class="nav justify-content-end nav-pills card-header-pills" role="tablist">
                                <li class="nav-item">
                                   
                                </li>
                            </ul>
                            </div>
                        </div>
                    </div>
                    
        </div>
    </div> -->


    <form id="regForm" action="">
  <!-- <h1>Register:</h1> -->
  <!-- One "tab" for each step in the form: -->
  <div class="tab">
    <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Requisition & Technical Data Sheet for Starter Panel Manufacturing.</h4>
                                        <!-- <p class="card-title-desc">Here are examples of <code>.form-control</code> applied to each
                                            textual HTML5 <code>&lt;input&gt;</code> <code>type</code>.</p> -->
                                    </div>
                                    <div class="card-body p-4">

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <!-- <div> 
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Customer Name </label>
                                                        <input class="form-control" type="text" placeholder="Name" id="example-text-input">
                                                    </div>
                                                </div> -->
                                                <!-- <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="validationCustom03">City</label>
                                                            <input type="text" class="form-control" id="validationCustom03" placeholder="City"
                                                                required>
                                                            <div class="invalid-feedback">
                                                                Please provide a valid city.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="validationCustom04">State</label>
                                                            <input type="text" class="form-control" id="validationCustom04" placeholder="State"
                                                                required>
                                                            <div class="invalid-feedback">
                                                                Please provide a valid state.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="validationCustom05">Zip</label>
                                                            <input type="text" class="form-control" id="validationCustom05" 
                                                            placeholder="Zip"
                                                                required>
                                                            <div class="invalid-feedback">
                                                                Please provide a valid zip.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <div class="row">
                                                    <div class="mb-3">
                                                        <label for="example-search-input" class="form-label">Project Name</label>
                                                        <input class="form-control" type="text" placeholder="Project Name"
                                                            id="example-search-input">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-datetime-local-input" class="form-label">Date</label>
                                                        <input class="form-control" type="datetime-local" value="2019-08-19T13:45:00"
                                                            id="example-datetime-local-input">
                                                    </div>
                                                    <!-- <div class="mb-3">
                                                        <label for="example-number-input" class="form-label">Panel Price</label>
                                                        <input class="form-control" type="number" placeholder="3,33,333" id="example-number-input">
                                                    </div>  -->
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                    
                                                    
                                                    <div class="mb-3">
                                                        <label for="example-datetime-local-input" class="form-label">Delivery Date</label>
                                                        <input class="form-control" type="datetime-local" value="2019-08-19T13:45:00"
                                                            id="example-datetime-local-input">
                                                    </div>
                                                
                                                    <!-- <div class="mb-3">
                                                        <label for="example-number-input" class="form-label">Panel SL Number</label>
                                                        <input class="form-control" type="number" placeholder="42" id="example-number-input">
                                                    </div>-->
                                                    <!--   -->
                                                    <!-- <div class="mb-3">
                                                        <label for="example-number-input" class="form-label">Credit Days</label>
                                                        <input class="form-control" type="number" placeholder="42" id="example-number-input">
                                                    </div> -->
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
  </div>
  <div class="tab">
  <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Pump Catalog Selection</h4>
                                    
                                    </div>
                                    <div class="card-body p-4">
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
                                                            <select required class="form-control form-select">
                                                                <option value="">-----</option>
                                                                <option value="wr">Writing</option>
                                                                <option value="ph">Photography</option>
                                                                <option value="cy">Cycling</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select required class="form-control form-select">
                                                                <option value="">-----</option>
                                                                <option value="wr">Writing</option>
                                                                <option value="ph">Photography</option>
                                                                <option value="cy">Cycling</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select required class="form-control form-select">
                                                                <option value="">-----</option>
                                                                <option value="wr">Writing</option>
                                                                <option value="ph">Photography</option>
                                                                <option value="cy">Cycling</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select required class="form-control form-select">
                                                                <option value="">-----</option>
                                                                <option value="wr">Writing</option>
                                                                <option value="ph">Photography</option>
                                                                <option value="cy">Cycling</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select required class="form-control form-select">
                                                                <option value="">-----</option>
                                                                <option value="wr">Writing</option>
                                                                <option value="ph">Photography</option>
                                                                <option value="cy">Cycling</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select required class="form-control form-select">
                                                                <option value="">-----</option>
                                                                <option value="wr">Writing</option>
                                                                <option value="ph">Photography</option>
                                                                <option value="cy">Cycling</option>
                                                            </select>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <th scope="row">No. Of PUMP</th>
                                                        <td>
                                                            <select required class="form-control form-select">
                                                                <option value="">-----</option>
                                                                <option value="wr">Writing</option>
                                                                <option value="ph">Photography</option>
                                                                <option value="cy">Cycling</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select required class="form-control form-select">
                                                                <option value="">-----</option>
                                                                <option value="wr">Writing</option>
                                                                <option value="ph">Photography</option>
                                                                <option value="cy">Cycling</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select required class="form-control form-select">
                                                                <option value="">-----</option>
                                                                <option value="wr">Writing</option>
                                                                <option value="ph">Photography</option>
                                                                <option value="cy">Cycling</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select required class="form-control form-select">
                                                                <option value="">-----</option>
                                                                <option value="wr">Writing</option>
                                                                <option value="ph">Photography</option>
                                                                <option value="cy">Cycling</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select required class="form-control form-select">
                                                                <option value="">-----</option>
                                                                <option value="wr">Writing</option>
                                                                <option value="ph">Photography</option>
                                                                <option value="cy">Cycling</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select required class="form-control form-select">
                                                                <option value="">-----</option>
                                                                <option value="wr">Writing</option>
                                                                <option value="ph">Photography</option>
                                                                <option value="cy">Cycling</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                
                                                </tbody>
                                            </table>
                                        </div>
                                   
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Panel Incomer Selection</h4>
                                    
                                    </div>
                                    <div class="card-body p-4">
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
                                                            <select required class="form-control form-select">
                                                                <option value="">-----</option>
                                                                <option value="wr">Writing</option>
                                                                <option value="ph">Photography</option>
                                                                <option value="cy">Cycling</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select required class="form-control form-select">
                                                                <option value="">-----</option>
                                                                <option value="wr">Writing</option>
                                                                <option value="ph">Photography</option>
                                                                <option value="cy">Cycling</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select required class="form-control form-select">
                                                                <option value="">-----</option>
                                                                <option value="wr">Writing</option>
                                                                <option value="ph">Photography</option>
                                                                <option value="cy">Cycling</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select required class="form-control form-select">
                                                                <option value="">-----</option>
                                                                <option value="wr">Writing</option>
                                                                <option value="ph">Photography</option>
                                                                <option value="cy">Cycling</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select required class="form-control form-select">
                                                                <option value="">-----</option>
                                                                <option value="wr">Writing</option>
                                                                <option value="ph">Photography</option>
                                                                <option value="cy">Cycling</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select required class="form-control form-select">
                                                                <option value="">-----</option>
                                                                <option value="wr">Writing</option>
                                                                <option value="ph">Photography</option>
                                                                <option value="cy">Cycling</option>
                                                            </select>
                                                        </td>

                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                   
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
  </div>
  <div class="tab">
  <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <!-- <div class="card-header">
                                        <h4 class="card-title"></h4>
                                    
                                    </div> -->
                                    <div class="card-body p-4">

                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">PANEL LOCATION</label>
                                                    <select required class="form-control form-select">
                                                            <option value="">-----</option>
                                                            <option value="wr">Writing</option>
                                                            <option value="ph">Photography</option>
                                                            <option value="cy">Cycling</option>
                                                    </select>
                                                </div>
                                                
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">PANEL COLOUR</label>
                                                    <select required class="form-control form-select">
                                                            <option value="">-----</option>
                                                            <option value="wr">Writing</option>
                                                            <option value="ph">Photography</option>
                                                            <option value="cy">Cycling</option>
                                                    </select>
                                                </div>
                                                
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">BUSBAR</label>
                                                    <select required class="form-control form-select">
                                                            <option value="">-----</option>
                                                            <option value="wr">Writing</option>
                                                            <option value="ph">Photography</option>
                                                            <option value="cy">Cycling</option>
                                                    </select>
                                                </div>
                                                
                                            </div>

                                            <div class="col-lg-3">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">CABLE ENTRY</label>
                                                    <select required class="form-control form-select">
                                                            <option value="">-----</option>
                                                            <option value="wr">Writing</option>
                                                            <option value="ph">Photography</option>
                                                            <option value="cy">Cycling</option>
                                                    </select>
                                                </div>
                                                
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">FEEDER AMMETER</label>
                                                    <select required class="form-control form-select">
                                                            <option value="">-----</option>
                                                            <option value="wr">Writing</option>
                                                            <option value="ph">Photography</option>
                                                            <option value="cy">Cycling</option>
                                                    </select>
                                                </div>
                                                
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">TYPE1 / TYPE2</label>
                                                    <select required class="form-control form-select">
                                                            <option value="">-----</option>
                                                            <option value="wr">Writing</option>
                                                            <option value="ph">Photography</option>
                                                            <option value="cy">Cycling</option>
                                                    </select>
                                                </div>
                                                
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <!-- <div class="card-header">
                                        <h4 class="card-title"></h4>
                                    
                                    </div> -->
                                    <div class="card-body p-4">

                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">CABLE MAKE</label>
                                                    <select required class="form-control form-select">
                                                            <option value="">-----</option>
                                                            <option value="wr">Writing</option>
                                                            <option value="ph">Photography</option>
                                                            <option value="cy">Cycling</option>
                                                    </select>
                                                </div>
                                                
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">ACCESS</label>
                                                    <select required class="form-control form-select">
                                                            <option value="">-----</option>
                                                            <option value="wr">Writing</option>
                                                            <option value="ph">Photography</option>
                                                            <option value="cy">Cycling</option>
                                                    </select>
                                                </div>
                                                
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">MOUNTING</label>
                                                    <select required class="form-control form-select">
                                                            <option value="">-----</option>
                                                            <option value="wr">Writing</option>
                                                            <option value="ph">Photography</option>
                                                            <option value="cy">Cycling</option>
                                                    </select>
                                                </div>
                                                
                                            </div>

                                            <div class="col-lg-3">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">PANEL TYPE</label>
                                                    <select required class="form-control form-select">
                                                            <option value="">-----</option>
                                                            <option value="wr">Writing</option>
                                                            <option value="ph">Photography</option>
                                                            <option value="cy">Cycling</option>
                                                    </select>
                                                </div>
                                                
                                            </div>
                                            

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body p-4">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label"> REMARKS / SPECIAL INSTRUCTIONS </label>
                                                    <textarea class="form-control" type="text" placeholder="Name"
                                                    id="example-text-input"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
  </div>
  <!-- <div class="tab">Login Info:
    <p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
    <p><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
  </div> -->
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)" style="border-radius: 25px;">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)" style="border-radius: 25px;background: #0069a5;">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <!-- <span class="step"></span> -->
  </div>
</form>

@endsection

@section('script')
    <script src="{{ URL::asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Plugins js-->
    <script src="{{ URL::asset('assets/libs/jquery-vectormap/jquery-vectormap.min.js') }}"></script>
    {{-- <script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script> --}}
    <!-- dashboard init -->
    <script src="{{ URL::asset('assets/js/pages/dashboard.init.js') }}"></script>
    {{-- <script src="{{ URL::asset('assets/js/app.min.js') }}"></script> --}}

    <!-- <script href="{{ URL::asset('assets/js/step-form.js') }}" ></script> -->

    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
        } else {
            document.getElementById("nextBtn").innerHTML = "Next";
        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n)
        }

        function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("regForm").submit();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
        }

        function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
            // add an "invalid" class to the field:
            y[i].className += " invalid";
            // and set the current valid status to false
            valid = false;
            }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
        }

        function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
        }
    </script>

@endsection
