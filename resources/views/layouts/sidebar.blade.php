<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="#">TARUNA BHAKTI</a>
    </div>
    <div class="sidebar-user">
        <div class="sidebar-user-picture">
            <img alt="image" src="{{ asset('dist/img/user.jpg') }}">
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
        <li class="{{ request()->is('home') ? 'active' : '' }}">
            <a href="{{ route('home') }}"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a>
        </li>

        <li class="menu-header">Administrasi</li>
        <li>
            <a href="#" class="has-dropdown"><i class="fas fa-database"></i><span> Data Master </span></a>
            <ul class="menu-dropdown">
                <li class="{{ request()->is('datasiswa') ? 'active' : '' }}"><a href="{{route('datasiswa')}}"><i class="ion ion-ios-circle-outline"></i> Data Siswa </a></li>
                <li class="{{ request()->is('dataguru') ? 'active' : '' }}"><a href="{{route('dataguru')}}"><i class="ion ion-ios-circle-outline"></i> Data Guru </a></li>
                <li class="{{ request()->is('datakelas') ? 'active' : '' }}"><a href="{{route('datakelas')}}"><i class="ion ion-ios-circle-outline"></i> Data Kelas </a></li>
            </ul>
        </li>
        <li>
            <a href="#" class="has-dropdown"><i class="far fa-file"></i><span>Laporan Nilai Siswa</span></a>
            <ul class="menu-dropdown">
                <li class="{{ request()->is('datamapel') ? 'active' : '' }}"><a href="{{route('datamapel')}}"><i class="ion ion-ios-circle-outline"></i> Mata Pelajaran </a></li>
                <li class="{{ request()->is('datakategori') ? 'active' : '' }}"><a href="{{route('datakategori')}}"><i class="ion ion-ios-circle-outline"></i> Kategori Penilaian </a></li>
                <li class="{{ request()->is('datakkm') ? 'active' : '' }}"><a href="{{route('datakkm')}}"><i class="ion ion-ios-circle-outline"></i> KKM </a></li>
                <li class="{{ request()->is('entrynilai') ? 'active' : '' }}"><a href="{{route('entrynilai')}}"><i class="ion ion-ios-circle-outline"></i> Entry Penilaian </a></li>
                <li ><a href=""><i class="ion ion-ios-circle-outline"></i> List Nilai Siswa </a></li>
                <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Setting Penilaian </a></li>
                <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Cetak Raport </a></li>
                <li><a href="#"><i class="ion ion-ios-circle-outline"></i> Laporan Rekap Nilai </a></li>
            </ul>
        </li>
        <li>
            <a href="#" class="has-dropdown"><i class="far fa-folder"></i><span>Administrasi Guru</span></a>
            <ul class="menu-dropdown">
                <li><a href="#"><i class="ion ion-ios-circle-outline"></i> none </a></li>
                <li><a href="#"><i class="ion ion-ios-circle-outline"></i> none </a></li>
            </ul>
        </li>
    </ul>
</aside>