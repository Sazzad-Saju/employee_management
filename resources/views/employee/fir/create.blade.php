@extends('employee.master')
@section('title','Create Fir')
@section('content')
<div class="main">
    <div class="row">
      <div class="col-md-12">
        <div class="title">FIR</div>
      </div>
    </div>

    <!-- Start Form -->
    <form method="POST" action="{{route('employee.fir.store')}}">
        @csrf
      <div class="row mb-5">
        <div class="col-xl-4 col-lg-6">
          <div class="search-bar mb-3">
            <div class="selectgroup">
              <select name="level"  @error('level') style="border: 1px solid #ff0e0e" @enderror>
                <option value="">Choose Offence level</option>
                <option value="Minor" {{ old('level') === "Minor" ? 'selected' : '' }}>Minor</option>
                <option value="Mejor" {{ old('level') === "Mejor" ? 'selected' : '' }}>Mejor</option>
                <option value="Critical" {{ old('level') === "Critical" ? 'selected' : '' }}>Critical</option>
              </select>
                @error('level')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6">
          <div class="search-bar mb-3">
            <div class="selectgroup">
              <select name="employee_id"  @error('employee_id') style="border: 1px solid #ff0e0e" @enderror value="{{old('employee_id')}}">
                <option value="">Choose Employee</option>
                @foreach($employees as $employee)
                    @if(old('employee_id')==$employee->id)
                        <option value={{$employee->id}} selected >{{$employee->name}}</option>
                    @else
                        <option value={{$employee->id}}>{{$employee->name}}</option>
                    @endif
                @endforeach
              </select>
                @error('employee_id')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-12">
          <div class="search-bar mb-3">
            <input type="text" class="singleDateRange value" placeholder="Date" id="startDate" name="date" @error('date') style="border: 1px solid #ff0e0e" @enderror value="{{ old(date('d/m/Y',strtotime('date'))) }}">
            @error('date')
                <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
        </div>
        <div class="col-xl-12 col-lg-12">
          <div class="textareafield mb-3">
            <textarea placeholder="Discription" rows="5" name="description"  @error('description') style="border: 1px solid #ff0e0e" @enderror>{{{ old('description') }}}</textarea>
            @error('description')
                <small class="text-danger">{{ $message }}</small>
            @enderror
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
