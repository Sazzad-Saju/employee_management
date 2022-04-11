<?php
    $hrs = Carbon\Carbon::now()->format('H');
    if ($hrs >=  0) $msg = "Mornin' Sunshine!"; // REALLY early
    if ($hrs >=  6) $msg = "Good morning";      // After 6am
    if ($hrs >= 12) $msg = "Good afternoon";    // After 12pm
    if ($hrs >= 17) $msg = "Good evening";      // After 5pm
    if ($hrs >= 22) $msg = "Go to bed!";        // After 10pm

    // yesterday,today notification
    $today = Carbon\Carbon::now()->toDateString();
    $yesterday = Carbon\Carbon::yesterday()->toDateString();
?>
<div class="top-user-info">
    <div class="row align-items-center">
        <div class="col-12 col-sm-4 col-md-5 col-lg-4 col-xl-4">
            <div class="welcome-message">
                <span class="grettings">{{$msg}}</span>
                <span class="name">{{auth()->user()->name}}</span>
            </div>
        </div>
        <div class="col-10 col-sm-6 col-md-6 col-lg-7 col-xl-7">
            <div class="search-bar">
                <form action="{{route('employee.dashboard.index')}}" method="GET">
                    <input type="search" placeholder="Search Anything" name="query" value="{{old('query')}}">
                </form>
                <i class="fas fa-search"></i>
            </div>
        </div>
        <div class="col-1 col-sm-2 col-md-1 col-lg-1 col-xl-1">
            <div class="user-notifications">
                <div class="notifications-dropdown">
                    <div class="dropdown">
                        <span class="badge"><i class="fas fa-circle"></i></span>

                        <i class="fas fa-bell dropdown-toggle" role="button" id="dropdownMenuButton" data-offset="5,5" data-toggle="dropdown" aria-expanded="false"></i>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            {{-- @dd(auth('employee')->user()->notifications) --}}
                            {{-- @foreach(auth('employee')->user()->notifications as $notification) --}}
                            {{-- <li> <a href="#"> {!!$notification["data"]["data"]!!} </a></li> --}}
                            {{-- <li> <a href="#"> {!!$notification!!} </a></li> --}}
                            {{-- @endforeach --}}
                            <span class="dropdown-header text-center pb-0">New Notification: {{auth('employee')->user()->notifications->count()}}</span>
                            @foreach(auth('employee')->user()->notifications as $notification)
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item" style="word-wrap: break-word;">
                                <i class="fas fa-envelope mr-2"></i> {!! substr($notification["data"]["data"],0,25).'...' !!}<br>
                                {{-- {{$notification['created_at']->format('Y-m-d')}} --}}
                                @if($notification['created_at']->format('Y-m-d') == $today)
                                    <span class="text-muted text-sm">{{'today at '.$notification['created_at']->format('H:i A')}}</span>
                                @elseif($notification['created_at']->format('Y-m-d') == $yesterday)
                                    <span class="text-muted text-sm">{{'yesterday at '.$notification['created_at']->format('H:i A')}}</span>
                                @else
                                    <span class="text-muted text-sm">{{$notification['created_at']->format('d-F')}}</span>
                                @endif
                            </a>
                            @endforeach
                            {{-- <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-users mr-2"></i> 8 friend requests
                                <span class="float-right text-muted text-sm">12 hours</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-file mr-2"></i> 3 new reports
                                <span class="float-right text-muted text-sm">2 days</span>
                            </a> --}}
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer text-center pb-2 pt-0">See All Notifications</a>
                        </div>
                    </div>
                </div>
                <div class="user-bar-icon">
                    <div id="toggle"></div>
                </div>
            </div>
        </div>
    </div>
</div>
