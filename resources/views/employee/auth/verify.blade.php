@extends('employee.master')
@section('title', 'Update Password')
@section('content')
    <div class="main">
        {{-- update button section --}}
        <div class="row">
            <div class="col-md-12">
                <div class="flexitembox">
                    <div>
                        <span class="title">Security Dashboard</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start Form -->
        <form action="{{ route('employee.security.update', auth('employee')->user()->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3 shadow bg-white rounded-3 p-3 mx-2 text-center justify-content-center">
                <div class="row">
                    <div class="col-xl-12">
                        <h1 class="form-title">Update Password</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="search-bar mb-3 ctrl-search-bar">
                            <input type="password" type="text" class="update"
                                placeholder="Current Password" name="pass" @error('pass') style="border: 1px solid #ff0e0e" @enderror>
                            <i class="far fa-eye"></i>
                            @error('pass')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="search-bar mb-3 ctrl-search-bar">
                            <input type="password" type="text" class="update"
                                placeholder="New Password" name="new_pass"
                                @error('new_pass') style="border: 1px solid #ff0e0e" @enderror>
                            <i class="far fa-eye"></i>
                            @error('new_pass')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="search-bar mb-3 ctrl-search-bar">
                            <input type="password" type="text" class="update"
                                placeholder="Repeat New Password" name="repeat_new"
                                @error('repeat_new') style="border: 1px solid #ff0e0e" @enderror>
                            <i class="far fa-eye"></i>
                            @error('repeat_new')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <button class="btn btn-sm defaultBtn">Update Now</button>
            </div>
    </div>
    </form>
    <!-- End Form -->
    </div>
@endsection
