@extends('employee.master')
@section('title','Loan')
@section('content')
<div class="main">
    <div class="row">
      <div class="col-md-12">
        <div class="flexitembox">
          <div>
            <span class="title">Loan</span>
          </div>
          <div>
            <a href="{{route('employee.loan.create')}}" class="hvr-icon-float-away"><i class="fas fa-plus hvr-icon"></i> Add Item</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Start Form -->
    <form>
      <div class="row mb-3 shadow bg-white rounded-3 p-3 mx-2">
        <div class="col-xl-5 col-lg-12 employee-view mb-3">
          <ul>
            <li><i class="fas fa-dollar-sign mr-1"></i>Loan Amount:</li>
            <li class="">20000</li>
          </ul>
        </div>
        <div class="col-xl-7 col-lg-12 employee-view mb-3">
          <ul>
            <li><i class="fas fa-file-invoice-dollar mr-1"></i>Loan Status:</li>
            <li class="">Pending</li>
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
            <li><i class="far fa-calendar-alt mr-1"></i>Approval Date:</li>
            <li class="">20-05-1993</li>
          </ul>
        </div>
        <div class="col-xl-5 col-lg-12 employee-view mb-3">
          <ul>
            <li><i class="far fa-calendar-alt mr-1"></i>Return Date:</li>
            <li class="">20-05-1993</li>
          </ul>
        </div>
      </div>
    </form>
     <!-- End Form -->
     
  </div>
@endsection