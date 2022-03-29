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

    @foreach ($loans as $loan)
    <!-- Start Form -->
    <form>
      <div class="row mb-3 shadow bg-white rounded-3 p-3 mx-2">
        <div class="col-xl-5 col-lg-12 employee-view mb-3">
          <ul>
            <li><i class="fas fa-dollar-sign mr-1"></i>Loan Amount:</li>
            <li class="">{{$loan->amount}}</li>
          </ul>
        </div>
        <div class="col-xl-7 col-lg-12 employee-view mb-3">
          <ul>
            <li><i class="fas fa-file-invoice-dollar mr-1"></i>Loan Status:</li>
            <li class="">{{$loan->status}}</li>
            {{-- need new column --}}
          </ul>
        </div>
        <div class="col-xl-5 col-lg-12 employee-view mb-3">
          <ul>
            <li><i class="far fa-lightbulb mr-1"></i>Reason:</li>
            <li class="">{{$loan->reason}}</li>
          </ul>
        </div>

        <div class="col-xl-7 col-lg-12 employee-view mb-3">
          <ul>
            <li><i class="far fa-calendar-alt mr-1"></i>Issue Date:</li>
            <li class="">{{$loan->issue_date}}</li>
          </ul>
        </div>
        <div class="col-xl-5 col-lg-12 employee-view mb-3">
          <ul>
            <li><i class="far fa-calendar-alt mr-1"></i>Return Date:</li>
            <li class="">{{$loan->return_date}}</li>
          </ul>
        </div>
      </div>
    </form>
     <!-- End Form -->
     @endforeach

  </div>
@endsection
