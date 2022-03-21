@extends('employee.master')
@section('title','Create Loan')
@section('content')
<div class="main">
    <div class="row">
      <div class="col-md-12">
        <div class="title">Loan</div>
      </div>
    </div>
    <!-- Start Form -->
    <form>
      <div class="row mb-5">
        <div class="col-xl-6 col-lg-12">
          <div class="search-bar mb-3">
            <input type="number" id="amount" placeholder="Amount">
            <i class="fas fa-dollar-sign"></i>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6">
          <div class="search-bar mb-3">
            <div class="selectgroup">
              <select>
                <option value="">Choose Status</option>
                <option value="Pending">Pending</option>
                <option value="Approved">Approved</option>
                <option value="Rejected">Rejected</option>
            </select>
            </div>
          </div>
        </div>
        <div class="col-xl-12 col-lg-12">
          <div class="textareafield mb-3">
            <textarea placeholder="Reason" rows="5"></textarea>
          </div>
        </div>
        
        
        <div class="col-xl-12 col-lg-12">
          <div class="mb-3">
            <div class="row">
              <div class="col-md-6">
                <div class="search-bar mb-3">
                  <label for="startDate" class="d-block pb-2 pl-2">Approval Date</label>
                  <input type="text" class="singleDateRange value" id="startDate">
                </div>
              </div>
              <div class="col-md-6">
                <div class="search-bar mb-3">
                  <label for="endDate" class="d-block pb-2 pl-2">Return Date</label>
                  <input type="text" class="singleDateRange value" id="endDate">
                </div>
              </div>
            </div>
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