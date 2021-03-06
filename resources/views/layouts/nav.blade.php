<form class="form-inline mr-auto">
    <ul class="navbar-nav mr-3">
        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="ion ion-navicon-round"></i></a></li>
        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="ion ion-search"></i></a></li>
    </ul>
    <div class="search-element">
        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
        <button class="btn" type="submit"><i class="ion ion-search"></i></button>
    </div>
</form>

<ul class="navbar-nav navbar-right">
    <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="ion ion-ios-bell-outline"></i></a>
        <div class="dropdown-menu dropdown-list dropdown-menu-right">
            <div class="dropdown-header">Notifications
                <div class="float-right">
                    <a href="#">View All</a>
                </div>
            </div>
            <div class="dropdown-list-content">
                <a href="#" class="dropdown-item dropdown-item-unread">
                    <img alt="image" src="../dist/img/avatar/avatar-1.jpeg" class="rounded-circle dropdown-item-img">
                    <div class="dropdown-item-desc">
                        <b>{{ Auth::user()->name }}</b> update now <b>Crud</b> to <b>Progres</b>
                        <div class="time">10 Hours Ago</div>
                    </div>
                </a>
            </div>
        </div>
    </li>
    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg"><i class="ion ion-android-person d-lg-none"></i>
        <div class="d-sm-none d-lg-inline-block">Hi, {{ Auth::user()->name }}</div></a>
        <div class="dropdown-menu dropdown-menu-right">
            <a href="profile.html" class="dropdown-item has-icon"><i class="ion ion-android-person"></i> Profile</a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                    
                <button type="submit" href="#" class="dropdown-item has-icon"><i class="ion ion-log-out"></i> Logout </button>
            </form>
        </div>
    </li>
</ul>