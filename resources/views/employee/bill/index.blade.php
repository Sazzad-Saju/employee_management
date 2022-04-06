@extends('employee.master')
@section('title','Conveyance Bill')
@section('content')
<div class="main">
    <div class="row">
      <div class="col-md-12">
        <div class="flexitembox">
          <div>
            <span class="title">Conveyance</span>
          </div>
          <div>
            <a href="{{route('employee.bill.create')}}" class="hvr-icon-float-away" style="display: none"><i class="fas fa-plus hvr-icon"></i> Add Item</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Start Form -->
    @foreach($bills as $bill)
    <form>
      <div class="row mb-3 shadow bg-white rounded-3 p-3 mx-2">
        <div class="col-xl-5 col-lg-12 employee-view mb-3">
          <ul>
            <li><i class="fas fa-money-bill-wave mr-1"></i>Bill Type:</li>
            <li class="">{{$bill->billType->name}}</li>
          </ul>
        </div>
        <div class="col-xl-7 col-lg-12 employee-view mb-3">
          <ul>
            <li><i class="fas fa-dollar-sign mr-1"></i>Amount:</li>
            <li class="">{{$bill->amount}}</li>
          </ul>
        </div>
        <div class="col-xl-5 col-lg-12 employee-view mb-3">
          <ul>
            <li><i class="far fa-calendar-alt mr-1"></i>Date:</li>
            <li class="">{{$bill->date}}</li>
          </ul>
        </div>

        <div class="col-xl-5 col-lg-12 employee-view mb-3">
          <ul>
            <li><i class="far fa-smile mr-1"></i>Approval</li>
            <li class="text-success">{{$bill->is_approved ? 'Approved':'Pending'}}</li>
          </ul>
        </div>
        <div class="col-xl-12 col-lg-12 employee-view mb-3">
          <ul>
            <li><i class="far fa-lightbulb mr-1"></i>Description: </li>
            <li>
              Dear Mr. {{$bill->employee->name}}, {{ $bill->description}}
            </li>
          </ul>
        </div>

      </div>
    </form>
    @endforeach
    <!-- End Form -->
    <div class="d-flex justify-content-center">
        {{$bills->links()}}
    </div>
  </div>
@endsection
