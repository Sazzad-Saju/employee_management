<div class="col-md-4">
    <div class="user-info mb-3" id="sidebar">
        <!-- Profile Image Card  -->
        <div class="image-card">
            <img src="{{asset(auth('employee')->user()->profile_image)}}" alt="user-img" class="img-fluid pb-2">
            <div class="user-name"> <a class="text-decoration-none" href="{{route('employee.info.index')}}"> {{auth('employee')->user()->name}} </a></div>
            <div class="user-designation">{{auth('employee')->user()->designation->name}}</div>
            <div class="user-number">{{auth('employee')->user()->phone}}</div>
            <ul class="pt-1">
                <li><a target="_blank" href="{{auth('employee')->user()->fb_url}}"><i class="fab fa-facebook-f"></i></a></li>
                <li><a target="_blank" href="{{auth('employee')->user()->li_url}}"><i class="fab fa-linkedin"></i></a></li>
                {{-- tt_url (twitter_url is changed to github_url) --}}
                <li><a target="_blank" href="{{auth('employee')->user()->tt_url}}"><i style="color:blue" class="fab fa-github"></i></a></li>
            </ul>
        </div>
        <!-- All Links -->
        <div class="list-group user-links">
            <a href="{{route('employee.dashboard.index')}}" class="list-group-item list-group-item-action {{request()->segment(1)==='dashboard'?'active':''}}" aria-current="true">
                <i class="fas fa-tachometer-alt"></i> Dashboard
            </a>
            <a href="{{route('employee.attendance.index')}}" class="list-group-item list-group-item-action {{request()->segment(1)==='attendance'?'active':''}}"><i class="fas fa-concierge-bell"></i> Attendance</a>
            <a href="{{route('employee.leave.index')}}" class="list-group-item list-group-item-action {{request()->segment(1)==='leave'?'active':''}}"><i class="fas fa-plane-departure"></i> Leave</a>
            <a href="{{route('employee.loan.index')}}" class="list-group-item list-group-item-action {{request()->segment(1)==='loan'?'active':''}}"><i class="fas fa-landmark"></i> Loan</a>
            <a href="{{route('employee.fir.index')}}" class="list-group-item list-group-item-action {{request()->segment(1)==='fir'?'active':''}}"><i class="fas fa-fire-alt"></i> Fir</a>
            <a href="{{route('employee.info.index')}}" class="list-group-item list-group-item-action {{request()->segment(1)==='info'?'active':''}}"><i class="fas fa-user-tie"></i> Employee</a>
            <a href="{{route('employee.bill.index')}}" class="list-group-item list-group-item-action {{request()->segment(1)==='bill'?'active':''}}"><i class="fas fa-hand-holding-usd"></i> Conveyance bill</a>
            <a href="{{route('employee.logout.destroy')}}" class="list-group-item list-group-item-action {{request()->segment(1)==='destroy'?'active':''}}"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </div>
        {{-- end all links --}}
    </div>
</div>
