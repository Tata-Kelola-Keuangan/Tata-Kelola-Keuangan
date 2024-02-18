<x-app-layout>
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        </div>

        <div class="row mb-3">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">User</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalUsers }}</div>
                                <div class="mt-2 mb-0 text-muted text-xs">
                                    <a class="text-success mr-2" href="{{ route('admin.user.index') }}"><i
                                            class="fa fa-arrow-up"></i> SHOW MORE</a>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user fa-2x text-success"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">Pegawai</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalPegawais }}</div>
                                <div class="mt-2 mb-0 text-muted text-xs">
                                    <a class="text-success mr-2" href="{{ route('admin.pegawai.index') }}"><i
                                            class="fa fa-arrow-up"></i> SHOW MORE</a>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">Perencanaan</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalPerencanaan }}</div>
                                <div class="mt-2 mb-0 text-muted text-xs">
                                    <a class="text-success mr-2" href="{{ route('admin.perencanaan.index') }}"><i
                                            class="fa fa-arrow-up"></i> SHOW MORE</a>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-info"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">Pelaksanaan</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                <div class="mt-2 mb-0 text-muted text-xs">
                                    <a class="text-success mr-2" href="{{ route('admin.pelaksanaan.index') }}"><i
                                            class="fa fa-arrow-up"></i> SHOW MORE</a>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-pen-nib fa-2x text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
