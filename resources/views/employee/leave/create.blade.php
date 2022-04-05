@extends('employee.master')
@section('title','Create Leave')
@section('content')
{{-- ckeditor  --}}
<div class="main">
    <div class="row">
      <div class="col-md-12">
        <div class="title">Leave</div>
      </div>
    </div>
    <!-- Start Form -->
    <form method="POST" action="{{route('employee.leave.store')}}">
        @csrf
      <div class="row mb-5">
        <div class="col-xl-6 col-lg-6">
          <div class="search-bar mb-3">
            <div class="selectgroup">
              <select name="leave_type_id" @error('leave_type_id') style="border: 1px solid #ff0e0e" @enderror>
                <option value="">Choose Leave Type</option>
                <option value="1">Casual</option>
                <option value="2">Sick</option>
                <option value="3">Earned</option>
                <option value="4">Unpaid</option>
              </select>
            @error('leave_type_id')
                <small class="text-danger">{{ $message }}</small>
            @enderror
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6">
          <div class="search-bar mb-3">
            <div class="selectgroup">
              <select name="submission_type" @error('submission_type') style="border: 1px solid #ff0e0e" @enderror>
                <option value="">Choose Submission Type</option>
                <option value="Pre">Pre Submission</option>
                <option value="Post">Post Submission</option>
            </select>
            @error('submission_type')
                <small class="text-danger">{{ $message }}</small>
            @enderror
            </div>
          </div>
        </div>
        {{--<div class="col-xl-12 col-lg-12">
          <div class="textareafield mb-3">
            <textarea placeholder="Reason" rows="5"></textarea>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6">
          <div class="search-bar mb-3">
            <div class="selectgroup">
              <select>
                <option value="">Choose Recommend Employee</option>
                <option value="1">All Helal</option>
                <option value="2">Mehedi Hassan</option>
                <option value="3">Nafiul Islam</option>
                <option value="4">Sebgatullah Arnob</option>
                <option value="5">Rabbial Anower</option>
                <option value="6">Sayef Sharkar</option>
                <option value="7">Craig Forbes</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6">
          <div class="search-bar mb-3">
            <div class="selectgroup">
              <select>
                <option value="">Choose Status</option>
                <option value="Pending">Pending</option>
                <option value="Approved">Approved</option>
                <option value="Rejected">Rejected</option>
            </select>
            </div>
          </div>
        </div> --}}
        <div class="col-xl-12 col-lg-12">
          <div class="mb-3">
            <label class="d-block pb-2 pl-2 font-weight-normal">Leave Time</label>
            <div class="row">
              <div class="col-md-6">
                <div class="search-bar mb-3">
                  <label for="startDate" class="d-block pb-2 pl-2">Start Date</label>
                  <input type="text" class="singleDateRange value" id="startDate" name="start_date" @error('start_date') style="border: 1px solid #ff0e0e" @enderror>
                @error('start_date')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                </div>
              </div>
              <div class="col-md-6">
                <div class="search-bar mb-3">
                  <label for="endDate" class="d-block pb-2 pl-2">End Date</label>
                  <input type="text" class="singleDateRange value" id="endDate" name="end_date" @error('end_date') style="border: 1px solid #ff0e0e" @enderror>
                @error('end_date')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                </div>
              </div>
            </div>
          </div>
        </div>
        {{-- here be better --}}
        <div class="col-xl-6 col-lg-6">
            <div class="search-bar">
              <div class="selectgroup">
                <select name="recommend_employee_id" @error('recommend_employee_id') style="border: 1px solid #ff0e0e" @enderror>
                  <option value="" >Choose Recommend Employee</option>
                  @foreach ($employees as $employee)
                    <option value="{{$employee->id}}">{{$employee->name}}</option>
                  @endforeach
                </select>
                @error('recommend_employee_id')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-12 col-lg-12">
            <div class="textareafield mb-3">
              <textarea id="editor" placeholder="Reason" rows="5" name="reason" @error('reason') style="border: 1px solid #ff0e0e" @enderror>{{{ old('reason') }}}</textarea>
            @error('reason')
                <small class="text-danger">{{ $message }}</small>
            @enderror
            </div>
        </div>
      <div class="row">
        <div class="col-md-12">
          <button type="submit" class="btn btn-sm defaultBtn float-right">Submit</button>
        </div>
      </div>
      {{-- validation error --}}
        {{-- @if ($errors->any())
            @foreach ($errors->all() as $error)
                {{ Toastr()->info($error, "Validation Error")}}
            @endforeach
        @endif --}}
    </form>
    <!-- End Form -->
  </div>
@endsection

@section('ckeditor')
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection
