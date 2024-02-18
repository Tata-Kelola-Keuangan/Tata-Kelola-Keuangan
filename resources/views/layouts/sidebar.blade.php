<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('asset/img/logo/logo2.png') }}">
        </div>
        <!-- Sidebar -->
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Features
    </div>

    @canany('User access', 'User add', 'User edit', 'User delete')
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
            aria-expanded="true" aria-controls="collapseBootstrap">
            <i class="fas fa- fa- solid fa-user -maximize"></i>
            <span><b>Manajemen User</b></span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Manajemen User</h6>
                <a class="collapse-item" href="{{ route('admin.user.index') }}">User</a>
                <a class="collapse-item" href="{{ route('admin.roles.index') }}">Tipe User</a>
                <a class="collapse-item" href="{{ route('admin.permissions.index') }}">Hak Akses</a>
            </div>
        </div>
    </li>
    @endcanany

    @canany('Pegawai access', 'Pegawai add', 'Pegawai edit', 'Pegawai delete')
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.pegawai.index') }}">
            <i class="fas fa-solid fa-users"></i>
            <span>Pegawai</span>
        </a>
    </li>
    @endcanany

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.perencanaan.index') }}">
            <i class="fas fa- fa-calendar"></i>
            <span>Perencanaan</span>
        </a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.pelaksanaan.index') }}">
            <i class="fas fa- fa-pen-nib"></i>
            <span>Pelaksanaan</span>
        </a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{ 'admin.laporan' }}">
            <i class="fas fa-solid fa-book"></i>
            <span>Laporan</span>
        </a>
    </li>
</ul>
<!-- Sidebar -->
