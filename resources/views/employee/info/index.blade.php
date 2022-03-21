@extends('employee.master')
@section('title','Employee Info')
@section('content')
<div class="main">
    <div class="row">
      <div class="col-md-12">
        <div class="flexitembox">
          <div>
            <span class="title">Employee Information</span>
          </div>
          <div>
            <a href="{{route('employee.info.create')}}" class="hvr-icon-float-away"><i class="fas fa-plus hvr-icon"></i> Add Item</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Start Form -->
    <form>
      <div class="row mb-3 shadow bg-white rounded-3 p-3 mx-2">
        <div class="col-xl-12">
          <h1 class="form-title">Personal Info</h1>
        </div>
        <div class="col-xl-6 col-lg-12 employee-view mb-3">
          <ul>
            <li class="font-weight-normal"><i class="far fa-user mr-1"></i>Name:</li>
            <li class="">Craig Forbes</li>
          </ul>
        </div>
        <div class="col-xl-6 col-lg-12 employee-view mb-3">
          <ul>
            <li class="font-weight-normal"><i class="fas fa-mobile-alt mr-1"></i>Phone:</li>
            <li class="">+1 (215) 226-3956</li>
          </ul>
        </div>
        <div class="col-xl-6 col-lg-12 employee-view mb-3">
          <ul>
            <li class="font-weight-normal"><i class="far fa-envelope mr-1"></i>Personal Email:</li>
            <li class=""> pekodiwe@mailinator.com</li>
          </ul>
        </div>
        <div class="col-xl-6 col-lg-12 employee-view mb-3">
          <ul>
            <li class="font-weight-normal"><i class="far fa-envelope mr-1"></i>Office Email:</li>
            <li class="">dawynogi@mailinator.com</li>
          </ul>
        </div>
        <div class="col-xl-6 col-lg-12 employee-view mb-3">
          <ul>
            <li class="font-weight-normal"><i class="fas fa-mobile-alt mr-1"></i>Office Phone:</li>
            <li class="">+1 (215) 226-3956</li>
          </ul>
        </div>
        <div class="col-xl-6 col-lg-12 employee-view mb-3">
          <ul>
            <li class="font-weight-normal"><i class="fas fa-birthday-cake mr-1"></i>Date of Birth:</li>
            <li class="">20-05-1993</li>
          </ul>
        </div>
        <div class="col-xl-6 col-lg-12 employee-view mb-3">
          <ul>
            <li class="font-weight-normal"><i class="fas fa-male mr-1"></i>Gender</li>
            <li class="">Male</li>
          </ul>
        </div>
        <div class="col-xl-6 col-lg-12 employee-view mb-3">
          <ul>
            <li class="font-weight-normal"><i class="fas fa-users mr-1"></i>Blood Group</li>
            <li class="">A+</li>
          </ul>
        </div>
        <div class="col-xl-6 col-lg-12 employee-view mb-3">
          <ul>
            <li class="font-weight-normal"><i class="fas fa-map-marker-alt mr-1"></i>Present Address</li>
            <li class="">Suite No. B-7 (7th Floor) , 2/2, Pallabi Main Road, Mirpur - 11.5, Dhaka Dhaka, 1216</li>
          </ul>
        </div>
        <div class="col-xl-6 col-lg-12 employee-view mb-3">
          <ul>
            <li class="font-weight-normal"><i class="fas fa-map-marker-alt mr-1"></i>Permanent Address</li>
            <li class="">Suite No. B-7 (7th Floor) , 2/2, Pallabi Main Road, Mirpur - 11.5, Dhaka Dhaka, 1216</li>
          </ul>
        </div>
        <!-- <div class="col-xl-12 col-lg-12 employee-view mb-3">
          <ul>
            <li class="d-block"><i class="far fa-user-circle mr-1"></i>Profile Picture</li>
            <li class="d-block">
              <img src="img/avatar.jpeg" width="180" class="img-fluid my-2"  alt="avatar">
            </li>
          </ul>
        </div> -->
      </div>
      <div class="row mb-3 shadow bg-white rounded-3 p-3 mx-2">
        <div class="col-xl-12">
          <h1 class="form-title">Important Info</h1>
        </div>
        <div class="col-xl-6 col-lg-12 employee-view mb-3">
          <ul>
            <li class="font-weight-normal"><i class="far fa-building mr-1"></i>Department</li>
            <li class="">Development</li>
          </ul>
        </div>
        <div class="col-xl-6 col-lg-12 employee-view mb-3">
          <ul>
            <li class="font-weight-normal"><i class="fas fa-user-graduate mr-1"></i>Designation</li>
            <li class="">Software Engineer</li>
          </ul>
        </div>
        <div class="col-xl-6 col-lg-12 employee-view mb-3">
          <ul>
            <li class="font-weight-normal"><i class="fas fa-dollar-sign mr-1"></i>Salary</li>
            <li class="">50000</li>
          </ul>
        </div>
        
        <div class="col-xl-6 col-lg-12 employee-view mb-3">
          <ul>
            <li class="font-weight-normal"><i class="far fa-calendar-alt mr-1"></i>Joining Date</li>
            <li class="">21-09-2021</li>
          </ul>
        </div>
        <div class="col-xl-6 col-lg-12 employee-view mb-3">
          <ul>
            <li class="font-weight-normal"><i class="far fa-calendar-alt mr-1"></i>Leaveing Date</li>
            <li class="">None</li>
          </ul>
        </div>
        <div class="col-xl-6 col-lg-12 employee-view mb-3">
          <ul>
            <li class="font-weight-normal"><i class="fas fa-user mr-1"></i>Employee Status</li>
            <li class="">Current</li>
          </ul>
        </div>
        <div class="col-xl-6 col-lg-12 employee-view mb-3">
          <ul>
            <li class="font-weight-normal"><i class="fas fa-user mr-1"></i>Emergency Contact Person</li>
            <li class="">Explicabo Ea quasi</li>
          </ul>
        </div>
        <div class="col-xl-6 col-lg-12 employee-view mb-3">
          <ul>
            <li class="font-weight-normal"><i class="fas fa-mobile-alt mr-1"></i>Emergency Contact Phone</li>
            <li class=" d-xl-block">+1 (901) 395-5178</li>
          </ul>
        </div>
        <div class="col-xl-6 col-lg-12 employee-view mb-3">
          <ul>
            <li class="font-weight-normal"><i class="fas fa-user mr-1"></i>Emergency Contact Relation</li>
            <li class="">Cousin</li>
          </ul>
        </div>
        <div class="col-xl-6 col-lg-12 employee-view mb-3">
          <ul>
            <li class="font-weight-normal"><i class="fas fa-user mr-1"></i>NID Number</li>
            <li class="">3054567827482374909</li>
          </ul>
        </div>
        <div class="col-xl-12 col-lg-12 employee-view mb-3">
          <ul>
            <li class="d-block font-weight-normal"><i class="fas fa-map-marker-alt mr-1"></i>Emergency Contact Address</li>
            <li class="d-block">Suite No. B-7 (7th Floor) , 2/2, Pallabi Main Road, Mirpur - 11.5, Dhaka Dhaka, 1216</li>
          </ul>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6 employee-view mb-3">
          <ul>
            <li class="d-block font-weight-normal"><i class="fas fa-certificate mr-1"></i>Certificate Image</li>
            <li class="d-block">
              <img src="{{asset('employee/img/certificate.jpeg')}}" width="180" class="img-fluid img-thumbnail p-1 my-2"  alt="avatar">
            </li>
          </ul>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6 employee-view mb-3">
          <ul>
            <li class="d-block font-weight-normal"><i class="fas fa-id-card mr-1"></i>NID Image</li>
            <li class="d-block">
              <img src="{{asset('employee/img/nid.webp')}}" width="180" class="img-fluid img-thumbnail p-1 my-2"  alt="avatar">
            </li>
          </ul>
        </div>
      </div>
    </form>
    <!-- End Form -->
  </div>
@endsection