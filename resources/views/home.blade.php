
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
    <title>Apk Sistem Akademik</title>

    <link rel="stylesheet" href="{{ asset('dist/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/modules/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/modules/summernote/summernote-lite.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/modules/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/demo.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
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
                                    <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                                    <div class="time">10 Hours Ago</div>
                                </div>
                                </a>
                                <a href="#" class="dropdown-item dropdown-item-unread">
                                <img alt="image" src="../dist/img/avatar/avatar-2.jpeg" class="rounded-circle dropdown-item-img">
                                <div class="dropdown-item-desc">
                                    <b>Ujang Maman</b> has moved task <b>Fix bug footer</b> to <b>Progress</b>
                                    <div class="time">12 Hours Ago</div>
                                </div>
                                </a>
                                <a href="#" class="dropdown-item">
                                <img alt="image" src="../dist/img/avatar/avatar-3.jpeg" class="rounded-circle dropdown-item-img">
                                <div class="dropdown-item-desc">
                                    <b>Agung Ardiansyah</b> has moved task <b>Fix bug sidebar</b> to <b>Done</b>
                                    <div class="time">12 Hours Ago</div>
                                </div>
                                </a>
                                <a href="#" class="dropdown-item">
                                <img alt="image" src="../dist/img/avatar/avatar-4.jpeg" class="rounded-circle dropdown-item-img">
                                <div class="dropdown-item-desc">
                                    <b>Ardian Rahardiansyah</b> has moved task <b>Fix bug navbar</b> to <b>Done</b>
                                    <div class="time">16 Hours Ago</div>
                                </div>
                                </a>
                                <a href="#" class="dropdown-item">
                                <img alt="image" src="../dist/img/avatar/avatar-5.jpeg" class="rounded-circle dropdown-item-img">
                                <div class="dropdown-item-desc">
                                    <b>Alfa Zulkarnain</b> has moved task <b>Add logo</b> to <b>Done</b>
                                    <div class="time">Yesterday</div>
                                </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg">
                        <i class="ion ion-android-person d-lg-none"></i>
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
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="index.html">TARUNA BHAKTI</a>
                    </div>
                    <div class="sidebar-user">
                        <div class="sidebar-user-picture">
                            <img alt="image" src="../dist/img/avatar/avatar-1.jpeg">
                        </div>
                        <div class="sidebar-user-details">
                            <div class="user-name">{{ Auth::user()->name }}</div>
                            <div class="user-role">
                                Administrator
                            </div>
                        </div>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Dashboard</li>
                        <li class="active">
                            <a href="#"><i class="ion ion-speedometer"></i><span>Dashboard</span></a>
                        </li>

                        <li class="menu-header">Administrasi</li>
                        <li>
                            <a href="#" class="has-dropdown"><i class="ion ion-ios-albums-outline"></i><span> Data Master </span></a>
                            <ul class="menu-dropdown">
                                <li><a href="{{route('datasiswa')}}"><i class="ion ion-ios-circle-outline"></i> Data Siswa </a></li>
                                <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Data Guru </a></li>
                                <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Data Kelas </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="table.html"><i class="ion ion-clipboard"></i><span>Tables</span></a>
                        </li>
                        <li>
                            <a href="#" class="has-dropdown"><i class="ion ion-ios-copy-outline"></i><span>Examples</span></a>
                            <ul class="menu-dropdown">
                                <li><a href="login.html"><i class="ion ion-ios-circle-outline"></i> Login</a></li>
                                <li><a href="register.html"><i class="ion ion-ios-circle-outline"></i> Register</a></li>
                                <li><a href="forgot.html"><i class="ion ion-ios-circle-outline"></i> Forgot Password</a></li>
                                <li><a href="reset.html"><i class="ion ion-ios-circle-outline"></i> Reset Password</a></li>
                                <li><a href="404.html"><i class="ion ion-ios-circle-outline"></i> 404</a></li>
                            </ul>
                        </li>

                        <li class="menu-header">More</li>
                        <li>
                            <a href="#" class="has-dropdown"><i class="ion ion-ios-nutrition"></i> Click Me</a>
                            <ul class="menu-dropdown">
                                <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Menu 1</a></li>
                                <li><a href="#" class="has-dropdown"><i class="ion ion-ios-circle-outline"></i> Menu 2</a>
                                    <ul class="menu-dropdown">
                                        <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 1</a></li>
                                        <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 2</a></li>
                                        <li><a href="#" class="has-dropdown"><i class="ion ion-ios-circle-outline"></i> Child Menu 3</a>
                                            <ul class="menu-dropdown">
                                                <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 1</a></li>
                                                <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 2</a></li>
                                                <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 4</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="ion ion-heart"></i> Badges <div class="badge badge-primary">10</div></a>
                        </li>
                        <li>
                            <a href="credits.html"><i class="ion ion-ios-information-outline"></i> Credits</a>
                        </li>          
                    </ul>
                </aside>
            </div>
            <div class="main-content">
                <section class="section">
                    <h1 class="section-header">
                        <div>Dashboard</div>
                    </h1>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="card card-sm-3">
                                <div class="card-icon bg-primary">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h4>SISWA</h4>
                                    </div>
                                    <div class="card-body">
                                        35
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="card card-sm-3">
                                <div class="card-icon bg-danger">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h4>GURU</h4>
                                    </div>
                                    <div class="card-body">
                                        8
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="card card-sm-3">
                                <div class="card-icon bg-warning">
                                    <i class="ion ion-paper-airplane"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h4>KELAS</h4>
                                    </div>
                                    <div class="card-body">
                                        3
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="card card-sm-3">
                                <div class="card-icon bg-success">
                                    <i class="fas fa-clone"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h4>Mapel</h4>
                                    </div>
                                    <div class="card-body">
                                        5
                                    </div>
                                </div>
                            </div>
                        </div>                  
                    </div>
                </section>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2021
                </div>
                <div class="footer-right"></div>
            </footer>
        </div>
    </div>

    <script src="{{ asset('dist/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('dist/modules/popper.js') }}"></script>
    <script src="{{ asset('dist/modules/tooltip.js') }}"></script>
    <script src="{{ asset('dist/modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dist/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('dist/modules/scroll-up-bar/dist/scroll-up-bar.min.js') }}"></script>
    <script src="{{ asset('dist/js/sa-functions.js') }}"></script>
    
    <script src="{{ asset('dist/modules/chart.min.js') }}"></script>
    <script src="{{ asset('dist/modules/summernote/summernote-lite.js') }}"></script>

    <script src="{{ asset('dist/js/scripts.js') }}"></script>
    <script src="{{ asset('dist/js/custom.js') }}"></script>
    <script src="{{ asset('dist/js/demo.js') }}"></script>
</body>
</html>