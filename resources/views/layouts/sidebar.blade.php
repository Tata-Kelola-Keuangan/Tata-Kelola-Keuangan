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
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Features
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="fas fa- fa- solid fa-user -maximize"></i>
          <span>Manajemen User</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Manajemen User</h6>
            <a class="collapse-item" href="{{route('admin.user.index')}}">User</a>
            <a class="collapse-item" href="{{route('admin.roles.index')}}">Tipe User</a>
            <a class="collapse-item" href="{{route('admin.permissions.index')}}">Hak Akses</a>
          </div>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{route('admin.pegawai.index')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Pegawai</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{route('admin.perencanaan.index')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Perencanaan</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{route('admin.pelaksanaan.index')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Pelaksanaan</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{('admin.laporan')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Laporan</span></a>
      </li>
    </ul>
    <!-- Sidebar -->