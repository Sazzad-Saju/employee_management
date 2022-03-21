@extends('employee.master')
@section('title','Create Fir')
@section('content')
<div class="main">
    <div class="row">
      <div class="col-md-12">
        <div class="title">FIR</div>
      </div>
    </div>

    <!-- Start Form -->
    <form>
      <div class="row mb-5">
        <div class="col-xl-4 col-lg-6">
          <div class="search-bar mb-3">
            <div class="selectgroup">
              <select>
                <option value="">Choose Offence level</option>
                <option value="1">Minor</option>
                <option value="2">Mejor</option>
                <option value="3">Critical</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6">
          <div class="search-bar mb-3">
            <div class="selectgroup">
              <select>
                <option value="">Choose Employee</option>
                <option value="1">John</option>
                <option value="2">Domingo</option>
                <option value="3">Rasel</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-12">
          <div class="search-bar mb-3">
            <input type="text" class="singleDateRange value" placeholder="Date" id="startDate">
          </div>
        </div>
        <div class="col-xl-12 col-lg-12">
          <div class="textareafield mb-3">
            <textarea placeholder="Discription" rows="5"></textarea>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <button type="submit" class="btn btn-sm defaultBtn float-right">Submit</button>
        </div>
      </div>
    </form>
    <!-- End Form -->

  </div>
@endsection