@extends('employee.master')
@section('title','Create Conveyance Bill')
@section('content')
<div class="main">
    <div class="row">
      <div class="col-md-12">
        <div class="title">Conveyance</div>
      </div>
    </div>
    <!-- Start Form -->
    <form>
      <div class="row mb-5">
        <div class="col-xl-6 col-lg-12">
          <div class="search-bar mb-3">
            <div class="selectgroup">
              <select>
                <option value="">Choose Bill Type</option>
                <option value="1">Bkash</option>
                <option value="2">Perfect Money</option>
                <option value="3">Bank</option>
                <option value="4">Hand Cash</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-12">
          <div class="search-bar mb-3">
            <input type="number" id="amount" placeholder="Amount">
            <i class="fas fa-dollar-sign"></i>
          </div>
        </div>
        <div class="col-xl-6 col-lg-12">
          <div class="search-bar mb-3">
            <input type="text" class="singleDateRange value" placeholder="Date" id="startDate">
          </div>
        </div>
        <div class="col-xl-6 col-lg-12">
          <div class="search-bar mb-3">
            <div class="selectgroup">
              <select>
                <option value="">Choose Approval Type</option>
                <option value="1">Yes</option>
                <option value="2">No</option>
                <option value="3">Pending</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-xl-12 col-lg-12">
          <div class="textareafield mb-3">
            <textarea name="" id="" placeholder="Discription" cols="" rows="5"></textarea>
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