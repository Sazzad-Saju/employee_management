@extends('employee.master')
@section('title','Create Employee Info')
@section('content')
<div class="main">
    <div class="row">
      <div class="col-md-12">
        <div class="title">Employee Information</div>
      </div>
    </div>
    <form method="POST" action="{{route('employee.info.update',auth('employee')->user()->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        {{-- Personal Info section--}}
      <div class="row mb-5">
        <div class="col-xl-12">
          <h1 class="form-title">Personal Info</h1>
        </div>
        <div class="col-xl-8 col-lg-6">
          <div class="search-bar mb-3">
            <input type="text" id="firstName" placeholder="First Name" name="name" value="{{$employee->name}}">
            <i class="far fa-user"></i>
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
        </div>

        {{-- removed last name part --}}

        <div class="col-xl-4 col-lg-6">
          <div class="search-bar mb-3">
            <input type="text" id="phoneNumber" placeholder="Phone Number" name="phone" value="{{$employee->phone}}">
            <i class="fas fa-mobile-alt"></i>
            @error('phone')
                <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
        </div>
        <div class="col-xl-4 col-lg-6">
          <div class="search-bar mb-3">
            <input type="email" id="personalEmail" placeholder="Personal Email" name="personal_email" value="{{$employee->personal_email}}">
            <i class="far fa-envelope"></i>
            @error('personal_email')
                <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
        </div>
        <div class="col-xl-4 col-lg-6">
          <div class="search-bar mb-3">
            <input type="email" id="officeEmail" placeholder="Office Email" name="office_email" value="{{$employee->office_email}}" readonly>
            <i class="fas fa-eye"></i>
            @error('office_email')
                <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
        </div>
        <div class="col-xl-4 col-lg-6">
          <div class="search-bar mb-3">
            <input type="text" id="officePhone" placeholder="Office Phone" name="office_phone" value="{{$employee->office_phone}}" readonly>
            <i class="fas fa-eye"></i>
            @error('office_phone')
                <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
        </div>

        {{-- SocialCorner section--}}
        <div class="col-xl-4 col-lg-6">
            <div class="search-bar mb-3">
              <input type="text" placeholder="Facebook URL" name="fb_url" value="{{$employee->fb_url}}">
              <i class="fab fa-facebook-f"></i>
              @error('fb_url')
                  <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
        </div>
        <div class="col-xl-4 col-lg-6">
            <div class="search-bar mb-3">
              <input type="text" placeholder="Linkedin URL" name="li_url" value="{{$employee->li_url}}">
              <i class="fab fa-linkedin-in"></i>
              @error('li_url')
                  <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
        </div>
        <div class="col-xl-4 col-lg-6">
            <div class="search-bar mb-3">
              <input type="text" placeholder="GitHub URL" name="tt_url" value="{{$employee->tt_url}}">
              <i class="fab fa-github"></i>
              @error('tt_url')
                  <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
        </div>
        {{-- endOfSocialCorner --}}

        <div class="col-xl-4 col-lg-6">
          <div class="search-bar mb-3">
            <label for="dateOfBirth" class="d-block pb-2 ps-2">Date of Birth</label>
            <input type="date" id="dateOfBirth" placeholder="Date of Birth" name="dob" value="{{$employee->dob}}">
            @error('dob')
                <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
        </div>
        <div class="col-xl-4 col-lg-6">
          <div class="mb-3">
            <label for="gender" name="gender" class="d-block pb-3">Gender</label>
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
            @error('present_address')
                <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
        </div>
        <div class="col-xl-6 col-lg-12">
          <div class="textareafield mb-3">
            <textarea placeholder="Permanent Address" rows="5" name="permanent_address">{{$employee->permanent_address}}</textarea>
            @error('permanent_address')
                <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
        </div>
        <div class="col-xl-6 col-lg-12">
          <div class="search-bar filetype mb-3">
            <label for="profilepicture" class="d-block pb-2 ps-2">Profile Picture</label>
            <input type="file" name="profile_image">
            @error('profile_image')
                <small class="text-danger">{{ $message }}</small>
            @enderror
            <img src="{{asset($employee->profile_image)}}" width="180" class="img-fluid my-2 ml-3"  alt="avatar">
          </div>
        </div>
      </div>
    {{-- removed part office info, emmergency info --}}
      <div class="row">
        <div class="col-md-12">
          <button type="submit" class="btn btn-sm defaultBtn float-right">Submit</button>
        </div>
      </div>
    {{-- end of personal info --}}
    </form>
  </div>
@endsection
