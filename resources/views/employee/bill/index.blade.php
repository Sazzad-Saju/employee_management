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
            <a href="{{route('employee.bill.create')}}" class="hvr-icon-float-away"><i class="fas fa-plus hvr-icon"></i> Add Item</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Start Form -->
    <form>
      <div class="row mb-3 shadow bg-white rounded-3 p-3 mx-2">
        <div class="col-xl-5 col-lg-12 employee-view mb-3">
          <ul>
            <li><i class="fas fa-money-bill-wave mr-1"></i>Bill Type:</li>
            <li class="">Bkash</li>
          </ul>
        </div>
        <div class="col-xl-7 col-lg-12 employee-view mb-3">
          <ul>
            <li><i class="fas fa-dollar-sign mr-1"></i>Amount:</li>
            <li class="">5000</li>
          </ul>
        </div>
        <div class="col-xl-5 col-lg-12 employee-view mb-3">
          <ul>
            <li><i class="far fa-calendar-alt mr-1"></i>Date:</li>
            <li class=""> 12/11/2021</li>
          </ul>
        </div>
        
        <div class="col-xl-5 col-lg-12 employee-view mb-3">
          <ul>
            <li><i class="far fa-smile mr-1"></i>Approval</li>
            <li class="text-success">Approved</li>
          </ul>
        </div>
        <div class="col-xl-12 col-lg-12 employee-view mb-3">
          <ul>
            <li><i class="far fa-lightbulb mr-1"></i> Reason</li>
            <li>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil dolore id adipisci illo nostrum, molestias minus tempora maxime numquam voluptatibus aut maiores aliquam sunt, at alias quis sit laudantium tempore?
            </li>
          </ul>
        </div>
        
      </div>
    </form>
    <!-- End Form -->
  </div>
@endsection