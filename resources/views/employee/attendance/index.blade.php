@extends('employee.master')
@section('title','Attendance')

@section('content')
<div class="main">

    {{-- attendance button --}}
    <div class="row">
        <div class="col-md-12">
            <div class="flexitembox">
                <div>
                    <span class="title">Attendance</span>
                </div>
                <div>
                    <a href="{{route('employee.attendance.create')}}" class="hvr-icon-float-away"><i class="fas fa-plus hvr-icon"></i> Gives Attendance </a>
                </div>
            </div>
        </div>
    </div>
    {{-- end attendance button --}}

    <!-- Start Form -->
    @foreach($attendances as $attendance)
    <form>
        <div class="row mb-3 shadow bg-white rounded-3 p-3 mx-2">
            <div class="col-xl-5 col-lg-12 employee-view mb-3">
                <ul>
                    <li><i class="fas fa-concierge-bell mr-1"></i>Attendance Date:</li>
                    {{-- display d/m/Y (show) converted from Y/m/d (store) --}}
                    <li class="">{{date('d/m/Y',strtotime($attendance->date))}}</li>
                </ul>
            </div>
            <div class="col-xl-5 col-lg-12 employee-view mb-3">
                <ul>
                    <li><i class="fas fa-hourglass-start mr-1"></i>Start Time:</li>
                    <li class="">{{date('h:i A',strtotime($attendance->start_time))}}</li>
                </ul>
            </div>
            <div class="col-xl-5 col-lg-12 employee-view mb-3">
                <ul>
                    <li><i class="fas fa-hourglass-start mr-1"></i>End Time:</li>
                    <li class="">{{date('h:i A',strtotime($attendance->end_time))}}</li>
                </ul>
            </div>
        </div>
    </form>
    <!-- End Form -->
    @endforeach

    {{-- attendance pagination --}}
    <div class="d-flex justify-content-center">
        {{$attendances->links()}}
    </div>

</div>
@endsection
