@extends('employee.master')
@section('title','Create Conveyance Bill')
@section('content')
<div class="main">
    <div class="row">
      <div class="col-md-12">
        <div class="title">Conveyance</div>
      </div>
    </div>
    <!-- Start Form -->
    <form action="{{route('employee.bill.store')}}" method="POST">
        @csrf
      <div class="row mb-5">
        <div class="col-xl-6 col-lg-12">
          <div class="search-bar mb-3">
            <div class="selectgroup">
              <select name="bill_type_id" @error('bill_type_id') style="border: 1px solid #ff0e0e" @enderror>
                <option value="">Choose Bill Type</option>
                @foreach ( $billTypes as $billType )
                    <option value="{{$billType->id}}"> {{$billType->name}} </option>
                @endforeach
              </select>
                @error('bill_type_id')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-12">
          <div class="search-bar mb-3">
            <input type="number" id="amount" placeholder="Amount" name="amount" @error('amount') style="border: 1px solid #ff0e0e" @enderror value="{{old('amount')}}">
            <i class="fas fa-dollar-sign"></i>
            @error('amount')
                <small class="text-danger">{{$message}}</small>
            @enderror
          </div>
        </div>
        {{-- deleted date, approvalType --}}
        <div class="col-xl-12 col-lg-12">
          <div class="textareafield mb-3">
            <textarea name="description" id="" placeholder="Discription" cols="" rows="5" @error('description') style="border: #ff0e0e 1px solid" @enderror>{{old('description')}}</textarea>
            @error('description')
                <small class="text-danger">{{$message}}</small>
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
