@extends('employee.master')
@section('title', 'Create Loan')
@section('content')
    <div class="main">
        <div class="row">
            <div class="col-md-12">
                <div class="title">Loan</div>
            </div>
        </div>
        <!-- Start Form -->
        <form method="POST" action="{{ route('employee.loan.store') }}">
            @csrf
            <div class="row mb-5">
                <div class="col-xl-12 col-lg-12">
                    <div class="search-bar mb-3">
                        <input type="number" id="amount" placeholder="Amount" name="amount"
                            @error('amount') style="border: 1px solid #ff0e0e" @enderror value="{{ old('amount') }}">
                        @error('amount')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                </div>

                {{-- deleted section: status(Pending,Approved,Rejected) --}}

                <div class="col-xl-12 col-lg-12 mt-3">
                    <div class="textareafield mb-3">
                        {{-- add id="editor" to textarea to use ckeditor --}}
                        <textarea placeholder="Reason" rows="5" name="reason"
                            @error('reason') style="border: 1px solid #ff0e0e" @enderror>{{ old('reason') }}</textarea>
                        @error('reason')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                {{-- deleted section: approval date, return date, --}}

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
@section('ckeditor')
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
