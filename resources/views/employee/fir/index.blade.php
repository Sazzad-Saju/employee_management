@extends('employee.master')
@section('title','Fir')
@section('content')
<div class="main">
    <div class="row">
      <div class="col-md-12">
        <div class="flexitembox">
          <div>
            <span class="title">FIR</span>
          </div>
          <div>
            <a href="{{route('employee.fir.create')}}" class="hvr-icon-float-away"><i class="fas fa-plus hvr-icon"></i> Add Item</a>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Start Form -->
    <form>
      <div class="row mb-3 shadow bg-white rounded-3 p-3 mx-2">
        <div class="col-xl-6 col-lg-12 employee-view mb-3">
          <ul>
            <li><i class="fas fa-user-tag mr-1"></i>Offence Level:</li>
            <li class="">Minor</li>
          </ul>
        </div>
        <div class="col-xl-6 col-lg-12 employee-view mb-3">
          <ul>
            <li><i class="fas fa-user-alt mr-1"></i>Employee Name:</li>
            <li class="">Domingo</li>
          </ul>
        </div>
        <div class="col-xl-6 col-lg-12 employee-view mb-3">
          <ul>
            <li><i class="far fa-calendar-alt mr-1"></i>Date:</li>
            <li class="">20-05-1993</li>
          </ul>
        </div>
        <div class="col-xl-6 col-lg-12 employee-view mb-3">
          <ul>
            <li><i class="far fa-lightbulb mr-1"></i>Discription:</li>
            <li class=""> Personal</li>
          </ul>
        </div>
        
      </div>
    </form>
    <!-- End Form -->

  </div>
@endsection