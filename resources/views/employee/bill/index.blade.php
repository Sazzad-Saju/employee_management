@extends('employee.master')
@section('title', 'Conveyance Bill')
@section('content')
    <div class="main">
        <div class="row">
            <div class="col-md-12">
                <div class="flexitembox">
                    <div>
                        <span class="title">Conveyance</span>
                    </div>
                    <div>
                        <a href="{{ route('employee.bill.create') }}" class="hvr-icon-float-away"><i
                                class="fas fa-plus hvr-icon"></i> Apply Now </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Form -->
        {{-- print each bill --}}
        @foreach ($bills as $bill)
            <form action="{{ route('employee.bill.destroy', $bill->id) }}" method="POST"
                id="delete_bill_{{ $bill->id }}">
                @csrf
                @method('DELETE')
                <div class="mb-3 shadow bg-white rounded-3 p-3 mx-2">
                    <div class="row text-right">
                        <div class="col">
                            <button class="text-secondary btn"
                                onclick="deleteBill({{ $bill->id }},'{{ $bill->is_approved }}', event)">
                                <i class="fa fa-window-close"></i>
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-5 col-lg-12 employee-view mb-3">
                            <ul>
                                <li><i class="fas fa-money-bill-wave mr-1"></i>Bill Type:</li>
                                <li class="">{{ $bill->billType->name }}</li>
                            </ul>
                        </div>
                        <div class="col-xl-7 col-lg-12 employee-view mb-3">
                            <ul>
                                <li><i class="fas fa-dollar-sign mr-1"></i>Amount:</li>
                                <li class="">{{ $bill->amount }}</li>
                            </ul>
                        </div>
                        <div class="col-xl-5 col-lg-12 employee-view mb-3">
                            <ul>
                                <li><i class="far fa-calendar-alt mr-1"></i>Date:</li>
                                <li class="">{{ $bill->date }}</li>
                            </ul>
                        </div>

                        <div class="col-xl-5 col-lg-12 employee-view mb-3">
                            <ul>
                                <li><i class="far fa-smile mr-1"></i>Approval</li>
                                @if ($bill->is_approved == 1)
                                    <li class="text-success">Approved</li>
                                @else
                                    <li class="text-secondary">Pending</li>
                                @endif
                            </ul>
                        </div>
                        <div class="col-xl-12 col-lg-12 employee-view mb-3">
                            <ul>
                                <li><i class="far fa-lightbulb mr-1"></i>Description: </li>
                                <li>
                                    {{ $bill->description }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </form>
        @endforeach
        <!-- End Form -->

        {{-- link paginatation --}}
        <div class="d-flex justify-content-center">
            {{ $bills->links() }}
        </div>
    </div>
@endsection

@section('confirmDialog')
<script>
function deleteBill(bill_id, is_approved, e) {
    e.preventDefault()
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.value == true) {
            if(is_approved != 0){
                Swal.fire({
                    icon: 'error',
                    title: `Can't delete....`,
                    text: `Your application is already Approved!`,
                })
            }else{
                $('#delete_bill_' + bill_id).submit();
            }
        }
    })
}
</script>
@endsection
