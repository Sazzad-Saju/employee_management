<?php
    $hrs = Carbon\Carbon::now()->format('H');
    if ($hrs >=  0) $msg = "Mornin' Sunshine!"; // REALLY early
    if ($hrs >=  6) $msg = "Good morning";      // After 6am
    if ($hrs >= 12) $msg = "Good afternoon";    // After 12pm
    if ($hrs >= 17) $msg = "Good evening";      // After 5pm
    if ($hrs >= 22) $msg = "Go to bed!";        // After 10pm
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
                <input type="text" placeholder="Search Anything">
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
                            <span class="dropdown-header text-center pb-0">15 Notifications</span>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-envelope mr-2"></i> 4 new messages
                                <span class="float-right text-muted text-sm">3 mins</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-users mr-2"></i> 8 friend requests
                                <span class="float-right text-muted text-sm">12 hours</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-file mr-2"></i> 3 new reports
                                <span class="float-right text-muted text-sm">2 days</span>
                            </a>
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
