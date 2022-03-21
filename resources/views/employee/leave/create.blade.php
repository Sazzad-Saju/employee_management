@extends('employee.master')
@section('title','Create Leave')
@section('content')
<div class="main">
    <div class="row">
      <div class="col-md-12">
        <div class="title">Leave</div>
      </div>
    </div>
    <!-- Start Form -->
    <form>
      <div class="row mb-5">
        <div class="col-xl-6 col-lg-6">
          <div class="search-bar mb-3">
            <div class="selectgroup">
              <select>
                <option value="">Choose Leave Type</option>
                <option value="1">Casual</option>
                <option value="2">Sick</option>
                <option value="3">Earned</option>
                <option value="4">Unpaid</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6">
          <div class="search-bar mb-3">
            <div class="selectgroup">
              <select>
                <option value="">Choose Submission Type</option>
                <option value="Pre">Pre Submission</option>
                <option value="Post">Post Submission</option>
            </select>
            </div>
          </div>
        </div>
        <div class="col-xl-12 col-lg-12">
          <div class="textareafield mb-3">
            <textarea placeholder="Reason" rows="5"></textarea>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6">
          <div class="search-bar mb-3">
            <div class="selectgroup">
              <select>
                <option value="">Choose Recommend Employee</option>
                <option value="1">All Helal</option>
                <option value="2">Mehedi Hassan</option>
                <option value="3">Nafiul Islam</option>
                <option value="4">Sebgatullah Arnob</option>
                <option value="5">Rabbial Anower</option>
                <option value="6">Sayef Sharkar</option>
                <option value="7">Craig Forbes</option>
              </select>
            </div>
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
          <div class="mb-3">
            <label class="d-block pb-2 pl-2 font-weight-normal">Leave Time</label>
            <div class="row">
              <div class="col-md-6">
                <div class="search-bar mb-3">
                  <label for="startDate" class="d-block pb-2 pl-2">Start Date</label>
                  <input type="text" class="singleDateRange value" id="startDate">
                </div>
              </div>
              <div class="col-md-6">
                <div class="search-bar mb-3">
                  <label for="endDate" class="d-block pb-2 pl-2">End Date</label>
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