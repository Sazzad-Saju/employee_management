<div class="col-md-4">
    <div class="user-info mb-3" id="sidebar">
        <!-- Profile Image Card  -->
        <div class="image-card">
            <img src="{{asset('employee/img/avatar.jpeg')}}" alt="user-img" class="img-fluid pb-2">
            <div class="user-name">{{auth()->user()->name}}</div>
            <div class="user-designation">graphics designer</div>
            <div class="user-number">{{auth()->user()->phone}}</div>
            <ul class="pt-1">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            </ul>
        </div>
        <!-- All Links -->
        <div class="list-group user-links">
            <a href="{{route('employee.dashboard.index')}}" class="list-group-item list-group-item-action {{request()->segment(1)==='dashboard'?'active':''}}" aria-current="true">
                <i class="fas fa-tachometer-alt"></i> Dashboard
            </a>
            <a href="{{route('employee.attendance.index')}}" class="list-group-item list-group-item-action {{request()->segment(1) === 'attendance'?'active':''}}"><i class="fas fa-concierge-bell"></i> Attendance</a>
            <a href="{{route('employee.leave.index')}}" class="list-group-item list-group-item-action {{request()->segment(1) === 'leave'?'active':''}}"><i class="fas fa-plane-departure"></i> Leave</a>
            <a href="{{route('employee.loan.index')}}" class="list-group-item list-group-item-action {{request()->segment(1) === 'loan'?'active':''}}"><i class="fas fa-landmark"></i> Loan</a>
            <a href="{{route('employee.fir.index')}}" class="list-group-item list-group-item-action {{request()->segment(1) === 'fir'?'active':''}}"><i class="fas fa-fire-alt"></i> Fir</a>
            <a href="{{route('employee.info.index')}}" class="list-group-item list-group-item-action {{request()->segment(1) === 'info'?'active':''}}"><i class="fas fa-user-tie"></i> Employee</a>
            <a href="{{route('employee.bill.index')}}" class="list-group-item list-group-item-action {{request()->segment(1) === 'bill'?'active':''}}"><i class="fas fa-hand-holding-usd"></i> Conveyance bill</a>
            <a href="{{route('employee.logout.destroy')}}" class="list-group-item list-group-item-action {{request()->segment(1) === 'logout'?'active':''}}"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </div>
    </div>
</div>