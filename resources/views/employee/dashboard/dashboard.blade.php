@extends('employee.master')
@section('title','Dashboard')
@section('content')
<div class="main">
  <div class="row">
    <div class="col-md-12">
    <h4 style="text-align: center">Notices</h4>
      <!-- Start Form -->
    @foreach($notices as $notice)
    <form>
        <div class="row mb-3 shadow bg-white rounded-3 p-3 mx-2">
            Date: {{$notice->created_at->format('d/m/Y')}}<br><br>
            {!! $notice->message !!}
        </div>
    </form>
    <!-- End Form -->
    @endforeach
    <div class="d-flex justify-content-center">
        {{$notices->links()}}
    </div>
    </div>
  </div>
</div>
@endsection
