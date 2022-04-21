@extends('employee.master')
@section('title', 'Loan')
@section('content')
    <div class="main">
        {{-- loan button section --}}
        <div class="row">
            <div class="col-md-12">
                <div class="flexitembox">
                    <div>
                        <span class="title">Loan</span>
                    </div>
                    <div>
                        <a href="{{ route('employee.loan.create') }}" class="hvr-icon-float-away"><i
                                class="fas fa-plus hvr-icon"></i> Apply Now </a>
                    </div>
                </div>
            </div>
        </div>
        {{-- end loan buttton section --}}

        {{-- print each requested loan --}}
        @foreach ($loans as $loan)
            <!-- Start Form -->
            <form action="{{ route('employee.loan.destroy', $loan->id) }}" method="POST" id="delete_loan_{{$loan->id}}">
                @csrf
                @method('DELETE')
                <div class="mb-3 shadow bg-white rounded-3 p-3 mx-2">
                    <div class="row text-right">
                        <div class="col">
                            <button class="text-secondary btn"
                                onclick="deleteLoan({{ $loan->id }},'{{ $loan->status }}', event)">
                                <i class="fa fa-window-close"></i>
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-5 col-lg-12 employee-view mb-3">
                            <ul>
                                <li><i class="fas fa-dollar-sign mr-1"></i>Loan Amount:</li>
                                <li class="">{{ $loan->amount }}</li>
                            </ul>
                        </div>
                        <div class="col-xl-7 col-lg-12 employee-view mb-3">
                            <ul>
                                <li><i class="fas fa-file-invoice-dollar mr-1"></i>Loan Status:</li>
                                @if($loan->status == 'accepted')
                                    <li class="text-success">{{ $loan['status'] }}</li>
                                @elseif($loan->status == 'rejected')
                                    <li class="text-danger">{{ $loan['status'] }}</li>
                                @else
                                    <li class="text-secondary">{{ $loan['status'] }}</li>
                                @endif
                            </ul>
                        </div>
                        <div class="col-xl-5 col-lg-12 employee-view mb-3">
                            <ul>
                                <li><i class="far fa-lightbulb mr-1"></i>Reason:</li>
                                <li class="">{!! $loan->reason !!}</li>
                            </ul>
                        </div>

                        <div class="col-xl-7 col-lg-12 employee-view mb-3">
                            <ul>
                                <li><i class="far fa-calendar-alt mr-1"></i>Issue Date:</li>
                                <li class="">{{ $loan->issue_date }}</li>
                            </ul>
                        </div>
                        <div class="col-xl-5 col-lg-12 employee-view mb-3">
                            <ul>
                                <li><i class="far fa-calendar-alt mr-1"></i>Return Date:</li>
                                <li class="">{{ $loan->return_date }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </form>
            <!-- End Form -->
        @endforeach
        {{-- end print each requested loan --}}

        {{-- link loan pagination --}}
        <div class="d-flex justify-content-center">
            {{ $loans->links() }}
        </div>
    </div>
@endsection

@section('confirmDialog')
<script>
    function deleteLoan(loan_id,loan_status,e){
        e.preventDefault()
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result)=> {
            if(result.value == true){
                // console.log((loan_status != 'Pending')&&(loan_status != 'pending'))
                if(loan_status != 'Pending' && loan_status != 'pending' ){
                    Swal.fire({
                        icon: 'error',
                        title: "Can't delete...",
                        text: 'Your application is already accepted or rejected!'
                    })
                }else{
                    $('#delete_loan_'+loan_id).submit();
                }
            }
        })
    }
</script>
@endsection
