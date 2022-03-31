@extends('employee.master')
@section('title','Create Employee Info')
@section('content')
<div class="main">
    <div class="row">
      <div class="col-md-12">
        <div class="title">Employee Information</div>
      </div>
    </div>
    <!-- Start Form -->
    <form method="POST" action="{{route('employee.info.update',auth('employee')->user()->id)}}">
        @csrf
        @method('PUT')
      <div class="row mb-5">
        <div class="col-xl-12">
          <h1 class="form-title">Personal Info</h1>
        </div>
        <div class="col-xl-8 col-lg-6">
          <div class="search-bar mb-3">
            <input type="text" id="firstName" placeholder="First Name" name="name" value="{{$employee->name}}">
            <i class="far fa-user"></i>
          </div>
        </div>
        {{-- <div class="col-xl-4 col-lg-6">
          <div class="search-bar mb-3">
            <input type="text" id="lastName" placeholder="Last Name">
            <i class="far fa-user"></i>
          </div>
        </div> --}}
        <div class="col-xl-4 col-lg-6">
          <div class="search-bar mb-3">
            <input type="text" id="phoneNumber" placeholder="Phone Number" name="phone" value="{{$employee->phone}}">
            <i class="fas fa-mobile-alt"></i>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6">
          <div class="search-bar mb-3">
            <input type="email" id="personalEmail" placeholder="Personal Email" name="personal_email" value="{{$employee->personal_email}}">
            <i class="far fa-envelope"></i>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6">
          <div class="search-bar mb-3">
            <input type="email" id="officeEmail" placeholder="Office Email" name="office_email" value="{{$employee->office_email}}">
            <i class="far fa-envelope"></i>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6">
          <div class="search-bar mb-3">
            <input type="text" id="officePhone" placeholder="Office Phone" name="office_phone" value="{{$employee->office_phone}}">
            <i class="fas fa-mobile-alt"></i>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6">
          <div class="search-bar mb-3">
            <label for="dateOfBirth" class="d-block pb-2 ps-2">Date of Birth</label>
            {{-- <input type="date" id="dateOfBirth" placeholder="Date of Birth" value="{{date('d/m/Y',strtotime($employee->dob))}}"> --}}
            <input type="date" id="dateOfBirth" placeholder="Date of Birth" name="dob" value="{{$employee->dob}}">
            {{-- <input type="text" class="singleDateRange value" id="dateOfBirth" placeholder="Date of Birth" value="18-11-1994"> --}}

          </div>
        </div>
        <div class="col-xl-4 col-lg-6">
          <div class="mb-3">
            <label for="gender" class="d-block pb-3">Gender</label>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender" value="Male" id="inlineRadio1" {{ $employee->gender == "Male" ? 'checked' : '' }} >
              <label class="form-check-label fw-normal" for="inlineRadio1">Male</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender" value="Female" id="inlineRadio2" {{ $employee->gender == "Female" ? 'checked' : '' }}  >
              <label class="form-check-label fw-normal" for="inlineRadio2">Female</label>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-12">
          <div class="search-bar mb-3">
            <label for="bloodGroup" class="d-block pb-2 ps-2">Blood Group</label>
            <div class="selectgroup">
              <select name="blood_group_id">
                <option value="">Choose Blood Group</option>
                    @foreach($bloodGroups as $bloodGroup)
                        <option value="{{$bloodGroup->id}}" {{$employee->blood_group_id == $bloodGroup->id ? 'selected': ''}}>{{$bloodGroup->name}}</option>
                    @endforeach
              </select>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-12">
          <div class="textareafield mb-3">
            <textarea placeholder="Present Address" rows="5" name="present_address">{{$employee->present_address}}</textarea>
          </div>
        </div>
        <div class="col-xl-6 col-lg-12">
          <div class="textareafield mb-3">
            <textarea placeholder="Permanent Address" rows="5" name="permanent_address">{{$employee->permanent_address}}</textarea>
          </div>
        </div>
        <div class="col-xl-6 col-lg-12">
          <div class="search-bar filetype mb-3">
            <label for="profilepicture" class="d-block pb-2 ps-2">Profile Picture</label>
            <input type="file">
            <img src="{{asset('employee/img/avatar.jpeg')}}" width="180" class="img-fluid my-2 ml-3"  alt="avatar">
          </div>
        </div>
      </div>
      <div class="row mb-5">
        <div class="col-xl-12">
          <h1 class="form-title">Important Info</h1>
        </div>
        <div class="col-xl-4 col-lg-6">
          <div class="search-bar mb-3">
            <div class="selectgroup">
              <select name="department_id">
                <option value="">Choose Department</option>
                @foreach($departments as $department)
                    <option value="{{$department->id}}" {{$employee->department_id == $department->id ? 'selected' : ''}}>{{$department->name}}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6">
          <div class="search-bar mb-3">
            <div class="selectgroup">
              <select name="designation_id">
                <option value="">Choose Designation</option>
                @foreach($designations as $designation)
                    <option value="{{$designation->id}}" {{$employee->designation_id == $designation->id ? 'selected': ''}}>{{$designation->name}}</option>
                @endforeach

                {{-- <option value="1">Technical Officer</option>
                <option value="2">Graphic Design</option>
                <option value="3">Software Engineer</option>
                <option value="4">Network Engineer</option>
                <option value="5">SEO Expert</option> --}}
              </select>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-12">
          <div class="search-bar mb-3">
            <input type="text" id="salary" placeholder="Salary" name="salary" value="{{$employee->salary}}">
            <i class="fas fa-dollar-sign"></i>
          </div>
        </div>
        <div class="col-xl-4 col-lg-12">
          <div class="search-bar mb-3">
            <label for="joiningDate" class="d-block pb-2 ps-2">Joining Date</label>
            <input type="date" id="joiningDate" name="join_date" value="{{$employee->join_date}}">
          </div>
        </div>
        <div class="col-xl-4 col-lg-6">
          <div class="search-bar mb-3">
            <label for="leavingDate" class="d-block pb-2 ps-2">Leaveing Date</label>
            <input type="date" id="leavingDate" name="quit_date" value="{{$employee->quit_date}}">
          </div>
        </div>
        <div class="col-xl-4 col-lg-6">
          <div class="mb-3">
            <label class="d-block pb-3">Employee Status</label>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="is_current_employee" value="1" id="inlineRadio1" {{$employee->is_current_employee == 1 ? 'checked': ''}} disabled>
              <label class="form-check-label fw-normal" for="inlineRadio1">Current</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="is_provision_period" value="1" id="inlineRadio2" {{$employee->is_provision_period == 1? 'checked': ''}} disabled>
              <label class="form-check-label fw-normal" for="inlineRadio2">Provision</label>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6">
          <div class="search-bar filetype mb-3">
            <label for="profilepicture" class="d-block pb-2 ps-2">Certificate Image</label>
            <input type="file">
            <img src="{{asset('employee/img/avatar.jpeg')}}" width="180" class="img-fluid my-2 ms-3"  alt="avatar">
          </div>
        </div>
        <div class="col-xl-4 col-lg-6">
          <div class="search-bar filetype mb-3">
            <label for="profilepicture" class="d-block pb-2 ps-2">NID Image</label>
            <input type="file">
            <img src="{{asset('employee/img/avatar.jpeg')}}" width="180" class="img-fluid my-2 ms-3"  alt="avatar">
          </div>
        </div>
        <div class="col-xl-4 col-lg-12">
          <div class="search-bar mb-3">
            <label for="profilepicture" class="d-block pb-2 ps-2">NID Number</label>
            <input type="number" id="nidNumber" name="nid_number" value="{{$employee->nid_number}}">

          </div>
        </div>
      </div>
      <div class="row mb-5">
        <div class="col-xl-12">
          <h1 class="form-title">Emergency Info</h1>
        </div>
        <div class="col-xl-4 col-lg-6">
          <div class="search-bar mb-3">
            <input type="text" id="contactName" placeholder="Emergency Contact Name" name="emergency_contact_person" value="{{$employee->emergency_contact_person}}">
            <i class="fas fa-user"></i>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6">
          <div class="search-bar mb-3">
            <input type="text" id="phoneNumber" placeholder="Emergency Contact Phone" name="emergency_contact_phone" value="{{$employee->emergency_contact_phone}}">
            <i class="fas fa-mobile-alt"></i>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6">
          <div class="search-bar mb-3">
            <input type="text" id="contactName" placeholder="Emergency Contact Relation" name="emergency_contact_relation" value="{{$employee->emergency_contact_relation}}">
            <i class="fas fa-user"></i>
          </div>
        </div>
        <div class="col-xl-12 col-lg-12">
          <div class="textareafield mb-3">
            <textarea placeholder="Emergency Contact Address" cols="30" rows="5" name="emergency_contact_address">{{$employee->emergency_contact_address}}</textarea>
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
