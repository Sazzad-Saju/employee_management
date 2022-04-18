@extends('employee.master')
@section('title', 'Dashboard')
@section('content')
    <div class="main">
        <div class="row">
            <div class="col-md-12">
                <h4 style="text-align: center">Notices</h4>
                <!-- Start Form -->
                {{-- prints each notice with date and messages that can contain html tag --}}
                @foreach ($notices as $notice)
                    <form>
                        <div class="mb-3 shadow bg-white rounded-3 p-3 mx-2">
                            <div class="row mb-2">
                                <div class="col">
                                    Date: {{ $notice->created_at->format('d/m/Y') }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col sm-line-space">
                                    {!! $notice->message !!}
                                    </div>
                            </div>
                        </div>
                    </form>
                    <!-- End Form -->
                @endforeach

                {{-- notice pagination --}}
                <div class="d-flex justify-content-center">
                    {{ $notices->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
