@extends('employee.master')
@section('title','Create Attendance')
@section('content')
<div class="main">
    <div class="row">
      <div class="col-md-12">
        <div class="title">Attendance</div>
      </div>
    </div>
    <!-- Start Form -->
    <form>
      <div class="row mb-5">
        <div class="col-xl-12 col-lg-12">
          <div class="mb-3">
            <label class="d-block pb-2 pl-2 font-weight-normal">6 November 2021</label>
            <div class="row">
              <div class="col-md-6">
                <div class="search-bar mb-3">
                  <label for="startDate" class="d-block pb-2 pl-2">Start Time</label>
                  <input type="text" class="singleTimePicker value" id="startDate">
                </div>
              </div>
              <div class="col-md-6">
                <div class="search-bar mb-3">
                  <label for="endDate" class="d-block pb-2 pl-2">End Time</label>
                  <input type="text" class="singleTimePicker value" id="endDate">
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