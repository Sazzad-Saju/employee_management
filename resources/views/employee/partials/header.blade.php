<?php
    /* Simple greetings message */
    $hrs = Carbon\Carbon::now()->format('H');
    if ($hrs >=  0) $msg = "Mornin' Sunshine!"; // REALLY early
    if ($hrs >=  6) $msg = "Good morning";      // After 6am
    if ($hrs >= 12) $msg = "Good afternoon";    // After 12pm
    if ($hrs >= 17) $msg = "Good evening";      // After 5pm
    if ($hrs >= 22) $msg = "Go to bed!";        // After 10pm

    /* yesterday,today notification time */
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

        {{-- searching query of notices results in dashboard --}}
        <div class="col-10 col-sm-6 col-md-6 col-lg-7 col-xl-7">
            <div class="search-bar">
                <form action="{{route('employee.dashboard.index')}}" method="GET">
                    <input type="search" placeholder="Search Anything" name="query" value="{{old('query')}}">
                </form>
                <i class="fas fa-search"></i>
            </div>
        </div>
        {{-- end of searching --}}

        {{-- employee notification --}}
        <div class="col-1 col-sm-2 col-md-1 col-lg-1 col-xl-1">
            <div class="user-notifications">
                <div class="notifications-dropdown">
                    <div class="dropdown">
                        <i class="fas fa-bell dropdown-toggle fa-2x" role="button" id="dropdownMenuButton" data-offset="5,5" data-toggle="dropdown" aria-expanded="false"></i>
                        {{-- show if unread notification is at least 1 --}}
                        @if(auth('employee')->user()->unReadNotifications->count()>0)
                        <span class="badge badge-danger" style="font-size: 0.75rem">{{auth('employee')->user()->unReadNotifications->count()}}</span>
                        @endif
                        {{-- list of notifications --}}
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <span class="dropdown-header text-center pb-0">New Notification: {{auth('employee')->user()->unReadNotifications->count()}}</span>
                            @foreach(auth('employee')->user()->unReadNotifications as $notification)
                            <div class="dropdown-divider"></div>
                            {{-- onclick on each notification marked as read of that particular --}}
                            <a class="dropdown-item"  onclick="markAsRead({{$notification}})">
                                {{-- show limited notice message/notification data, larger text breaks design --}}
                                <i class="fas fa-bullhorn mr-2"></i> {!! substr($notification["data"]["data"],0,25).'...' !!}<br>
                                {{-- show time: today/yesterday/date --}}
                                @if($notification['created_at']->format('Y-m-d') == $today)
                                    <span class="text-muted text-sm">{{'today at '.$notification['created_at']->format('H:i A')}}</span>
                                @elseif($notification['created_at']->format('Y-m-d') == $yesterday)
                                    <span class="text-muted text-sm">{{'yesterday at '.$notification['created_at']->format('H:i A')}}</span>
                                @else
                                    <span class="text-muted text-sm">{{$notification['created_at']->format('d-F')}}</span>
                                @endif
                                {{-- end of show time --}}
                            </a>
                            @endforeach
                            <div class="dropdown-divider"></div>
                            {{-- marked all notification as read button --}}
                            <a href="{{route('employee.notification.index')}}" class="dropdown-item dropdown-footer text-center pb-2 pt-0">Mark All as Read</a>
                        </div>
                    </div>
                </div>
                <div class="user-bar-icon">
                    <div id="toggle"></div>
                </div>
            </div>
        </div>
        {{-- end employee notification --}}
    </div>
</div>
<script>
    /* markAsRead: gets one particular notification id, send that in notificationController route to marked it as read */
    function markAsRead($notification){
        id = $notification['id'];
        let url = "{{ route('employee.notification.show', ':id') }}";
        url = url.replace(':id', id);
        document.location.href=url;
    }
</script>
