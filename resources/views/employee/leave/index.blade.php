@extends('employee.master')
@section('title','Leave')
@section('content')
<div class="main">
    {{-- leave button section --}}
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
    {{-- end leave button section --}}

    <!-- Start Form -->
    {{-- prints all leaves --}}
    @foreach($leaves as $leave)
    <form>
      <div class="row mb-3 shadow bg-white rounded-3 p-3 mx-2">
        <div class="col-xl-5 col-lg-12 employee-view mb-3">
          <ul>
            <li><i class="fas fa-plane-departure mr-1"></i>Leave Type:</li>
            <li class="">{{$leave->leaveType->name}}</li>
          </ul>
        </div>
        <div class="col-xl-7 col-lg-12 employee-view mb-3">
          <ul>
            <li><i class="far fa-handshake mr-1"></i>Submission Type:</li>
            <li class="">{{$leave->submission_type}}</li>
          </ul>
        </div>
        <div class="col-xl-5 col-lg-12 employee-view mb-3">
          <ul>
            <li><i class="far fa-lightbulb mr-1"></i>Reason:</li>
            <li class="">{!!$leave['reason']!!}</li>
          </ul>
        </div>
        <div class="col-xl-7 col-lg-12 employee-view mb-3">
          <ul>
            <li><i class="far fa-user mr-1"></i>Recommend Employee:</li>
            <li class="">{{ $leave->employee->name }}</li>
          </ul>
        </div>
        <div class="col-xl-5 col-lg-12 employee-view mb-3">
          <ul>
            <li><i class="far fa-smile mr-1"></i>Status</li>
            <li class="text-success">{{$leave['status']}}</li>
          </ul>
        </div>
        <div class="col-xl-7 col-lg-12 employee-view mb-3">
          <ul>
            <li><i class="far fa-calendar-alt mr-1"></i>Start Date:</li>
            <li class="">{{$leave['start_date']}}</li>
          </ul>
        </div>
        <div class="col-xl-5 col-lg-12 employee-view mb-3">
          <ul>
            <li><i class="far fa-calendar-alt mr-1"></i>End Date:</li>
            <li class="">{{$leave['end_date']}}</li>
          </ul>
        </div>
      </div>
    </form>
    <!-- End Form -->
    @endforeach
    {{-- end prints all leaves --}}

    {{-- paginate leaves section --}}
    <div class="d-flex justify-content-center">
        {{$leaves->links()}}
    </div>
  </div>
@endsection
