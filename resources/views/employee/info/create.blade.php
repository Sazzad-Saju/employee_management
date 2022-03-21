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
    <form>
      <div class="row mb-5">
        <div class="col-xl-12">
          <h1 class="form-title">Personal Info</h1>
        </div>
        <div class="col-xl-4 col-lg-6">
          <div class="search-bar mb-3">
            <input type="text" id="firstName" placeholder="First Name">
            <i class="far fa-user"></i>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6">
          <div class="search-bar mb-3">
            <input type="text" id="lastName" placeholder="Last Name">
            <i class="far fa-user"></i>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6">
          <div class="search-bar mb-3">
            <input type="text" id="phoneNumber" placeholder="Phone Number">
            <i class="fas fa-mobile-alt"></i>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6">
          <div class="search-bar mb-3">
            <input type="email" id="personalEmail" placeholder="Personal Email">
            <i class="far fa-envelope"></i>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6">
          <div class="search-bar mb-3">
            <input type="email" id="officeEmail" placeholder="Office Email">
            <i class="far fa-envelope"></i>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6">
          <div class="search-bar mb-3">
            <input type="text" id="officePhone" placeholder="Office Phone">
            <i class="fas fa-mobile-alt"></i>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6">
          <div class="search-bar mb-3">
            <label for="dateOfBirth" class="d-block pb-2 ps-2">Date of Birth</label>
            <input type="text" class="singleDateRange value" id="dateOfBirth" placeholder="Date of Birth">
            
          </div>
        </div>
        <div class="col-xl-4 col-lg-6">
          <div class="mb-3">
            <label for="gender" class="d-block pb-3">Gender</label>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
              <label class="form-check-label fw-normal" for="inlineRadio1">Male</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
              <label class="form-check-label fw-normal" for="inlineRadio2">Female</label>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-12">
          <div class="search-bar mb-3">
            <label for="bloodGroup" class="d-block pb-2 ps-2">Blood Group</label>
            <div class="selectgroup">
              <select>
                <option value="">Choose Blood Group</option>
                <option value="1">AB+</option>
                <option value="2">AB-</option>
                <option value="3">A+</option>
                <option value="4">A-</option>
                <option value="5">B+</option>
                <option value="6">B-</option>
                <option value="7">O+</option>
                <option value="8">O-</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-12">
          <div class="textareafield mb-3">
            <textarea placeholder="Present Address" rows="5"></textarea>
          </div>
        </div>
        <div class="col-xl-6 col-lg-12">
          <div class="textareafield mb-3">
            <textarea placeholder="Permanent Address" rows="5"></textarea>
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
              <select>
                <option value="">Choose Department</option>
                <option value="1">Support</option>
                <option value="2">Development</option>
                <option value="3">Network</option>
                <option value="4">support</option>
                <option value="5">SEOS</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6">
          <div class="search-bar mb-3">
            <div class="selectgroup">
              <select>
                <option value="">Choose Designation</option>
                <option value="1">Technical Officer</option>
                <option value="2">Graphic Design</option>
                <option value="3">Software Engineer</option>
                <option value="4">Network Engineer</option>
                <option value="5">SEO Expert</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-12">
          <div class="search-bar mb-3">
            <input type="text" id="salary" placeholder="Salary">
            <i class="fas fa-dollar-sign"></i>
          </div>
        </div>
        <div class="col-xl-4 col-lg-12">
          <div class="search-bar mb-3">
            <label for="joiningDate" class="d-block pb-2 ps-2">Joining Date</label>
            <input type="text" class="singleDateRange value" id="joiningDate">
          </div>
        </div>
        <div class="col-xl-4 col-lg-6">
          <div class="search-bar mb-3">
            <label for="leavingDate" class="d-block pb-2 ps-2">Leaveing Date</label>
            <input type="text" class="singleDateRange value" id="leavingDate">
          </div>
        </div>
        <div class="col-xl-4 col-lg-6">
          <div class="mb-3">
            <label for="gender" class="d-block pb-3">Employee Status</label>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
              <label class="form-check-label fw-normal" for="inlineRadio1">Current</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
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
            <input type="number" id="nidNumber">
            
          </div>
        </div>
      </div>
      <div class="row mb-5">
        <div class="col-xl-12">
          <h1 class="form-title">Emergency Info</h1>
        </div>
        <div class="col-xl-4 col-lg-6">
          <div class="search-bar mb-3">
            <input type="text" id="contactName" placeholder="Emergency Contact Name">
            <i class="fas fa-user"></i>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6">
          <div class="search-bar mb-3">
            <input type="text" id="phoneNumber" placeholder="Emergency Contact Phone">
            <i class="fas fa-mobile-alt"></i>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6">
          <div class="search-bar mb-3">
            <input type="text" id="contactName" placeholder="Emergency Contact Relation">
            <i class="fas fa-user"></i>
          </div>
        </div>
        <div class="col-xl-12 col-lg-12">
          <div class="textareafield mb-3">
            <textarea name="" id="" placeholder="Emergency Contact Address" cols="30" rows="5"></textarea>
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