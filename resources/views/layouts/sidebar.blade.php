    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <img src="{{asset('asset/img/logo/logo2.png')}}">
        </div>
        <div class="sidebar-brand-text mx-3">RuangAdmin</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('admin.dashboard')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li> 
      <li class="nav-item active">
        <a class="nav-link" href="{{route('user.index')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>User</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{route('pegawai.index')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Pegawai</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{('admin.laporan')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Laporan</span></a>
      </li>
    </ul>
    <!-- Sidebar -->