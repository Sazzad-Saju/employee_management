@extends('employee.master')
@section('title', 'Create Attendance')
@section('content')
    <div class="main">
        <div class="row">
            <div class="col-md-12">
                <div class="title">Attendance</div>
            </div>
        </div>
        <!-- Start Form -->
        {{-- catch each attendance from this form --}}
        <form method="POST" action="{{ route('employee.attendance.store') }}">
            @csrf
            <div class="row mb-5">
                <div class="col-xl-12 col-lg-12">
                    <div class="mb-3">
                        {{-- show only current date --}}
                        <label class="d-block pb-2 pl-2 font-weight-normal">{{ $date->format('d F Y') }}</label>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="search-bar mb-3">
                                    <label for="startDate" class="d-block pb-2 pl-2">Start Time</label>
                                    {{-- hidden payload current date for form validation --}}
                                    <input type="hidden" name="date" value="{{ $date->format('Y-m-d') }}">
                                    @error('date')
                                        {{ Brian2694\Toastr\Facades\Toastr::error($message, 'Duplicate Attendance') }}
                                    @enderror
                                    {{-- show only current time --}}
                                    <input type="text" value="{{ $date->format('h:i A') }}" name="start_time" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="search-bar mb-3">
                                    <label for="endDate" class="d-block pb-2 pl-2">End Time</label>
                                    {{-- payload only end time --}}
                                    <input type="text" class="singleTimePicker" id="endDate" value="18:00:00"
                                        name="end_time" @error('end_time') style="border: 1px solid #ff0e0e" @enderror>
                                    @error('end_time')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-sm defaultBtn float-right">Submit</button>
                </div>
            </div>
        </form>
        <!-- End Form -->
    </div>
@endsection
