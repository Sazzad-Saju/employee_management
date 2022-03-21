@extends('employee.master')
@section('title','Attendance')
@section('content')

        <div class="main">

            <div class="row">
                <div class="col-md-12">
                    <div class="flexitembox">
                        <div>
                            <span class="title">Attendance</span>
                        </div>
                        <div>
                            <a href="{{route('employee.attendance.create')}}" class="hvr-icon-float-away"><i class="fas fa-plus hvr-icon"></i> Add Item</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Start Form -->
            <form>
                <div class="row mb-3 shadow bg-white rounded-3 p-3 mx-2">
                    <div class="col-xl-5 col-lg-12 employee-view mb-3">
                        <ul>
                            <li><i class="fas fa-concierge-bell mr-1"></i>Attendance Date:</li>
                            <li class="">12/11/21</li>
                        </ul>
                    </div>
                    <div class="col-xl-5 col-lg-12 employee-view mb-3">
                        <ul>
                            <li><i class="fas fa-hourglass-start mr-1"></i>Start Time:</li>
                            <li class="">09:30 am</li>
                        </ul>
                    </div>
                    <div class="col-xl-5 col-lg-12 employee-view mb-3">
                        <ul>
                            <li><i class="fas fa-hourglass-start mr-1"></i>End Time:</li>
                            <li class="">06:30 pm</li>
                        </ul>
                    </div>
                </div>
            </form>
            <!-- End Form -->

        </div>
@endsection