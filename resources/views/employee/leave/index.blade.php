@extends('employee.master')
@section('title','Leave')
@section('content')
<div class="main">
    <div class="row">
      <div class="col-md-12">
        <div class="flexitembox">
          <div>
            <span class="title">Leave</span>
          </div>
          <div>
            <a href="{{route('employee.leave.create')}}" class="hvr-icon-float-away"><i class="fas fa-plus hvr-icon"></i> Add Item</a>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Start Form -->
    <form>
      <div class="row mb-3 shadow bg-white rounded-3 p-3 mx-2">
        <div class="col-xl-5 col-lg-12 employee-view mb-3">
          <ul>
            <li><i class="fas fa-plane-departure mr-1"></i>Leave Type:</li>
            <li class="">Earned</li>
          </ul>
        </div>
        <div class="col-xl-7 col-lg-12 employee-view mb-3">
          <ul>
            <li><i class="far fa-handshake mr-1"></i>Submission Type:</li>
            <li class="">Pre Submission</li>
          </ul>
        </div>
        <div class="col-xl-5 col-lg-12 employee-view mb-3">
          <ul>
            <li><i class="far fa-lightbulb mr-1"></i>Reason:</li>
            <li class=""> Personal</li>
          </ul>
        </div>
        <div class="col-xl-7 col-lg-12 employee-view mb-3">
          <ul>
            <li><i class="far fa-user mr-1"></i>Recommend Employee:</li>
            <li class="">Mehedi Hassan</li>
          </ul>
        </div>
        <div class="col-xl-5 col-lg-12 employee-view mb-3">
          <ul>
            <li><i class="far fa-smile mr-1"></i>Status</li>
            <li class="text-success">Approved</li>
          </ul>
        </div>
        <div class="col-xl-7 col-lg-12 employee-view mb-3">
          <ul>
            <li><i class="far fa-calendar-alt mr-1"></i>Start Date:</li>
            <li class="">20-05-1993</li>
          </ul>
        </div>
        <div class="col-xl-5 col-lg-12 employee-view mb-3">
          <ul>
            <li><i class="far fa-calendar-alt mr-1"></i>End Date:</li>
            <li class="">20-05-1993</li>
          </ul>
        </div>
      </div>
    </form>
    <!-- End Form -->

  </div>
@endsection