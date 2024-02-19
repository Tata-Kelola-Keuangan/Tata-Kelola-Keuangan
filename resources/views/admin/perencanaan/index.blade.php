@push('css')
    <link href="{{ asset('asset/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

<x-app-layout>
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Manajemen Perencanaan (Tahun 2023)</h1>
        </div>

        <div class="row mb-3">
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">Jumlah Perencanaan</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-chart-simple fa-2x text-success"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">Total Biaya Perencanaan</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. 00</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-money-bill fa-2x text-success"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">Perancangan</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-info"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-lg-12">
                <div class="d-flex justify-content-end">
                @can('Pegawai create')
                <a type="button" class="btn btn-primary mb-1" href="{{ route('admin.perencanaan.create') }}">Tambah Pegawai</a> 
            @endcan
                </div>
            </div>
        </div>

        <!-- DataTable with Hover -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="table-responsive p-3">
                        <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                            <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    <th>Kode Perencanaan</th>
                                    <th>Nama Perencanaan</th>
                                    <th>Sumber</th>
                                    <th>Revisi</th>
                                    <th>Unit</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($perencanaans as $perencanaan)
                                    <tr>
                                        <td>{{ $perencanaan->kode }}</td>
                                        <td>{{ $perencanaan->nama }}</td>
                                        <td>{{ $perencanaan->sumber }}</td>
                                        <td>{{ $perencanaan->revisi }}</td>
                                        <td>{{ $perencanaan->unit->nama }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('perencanaan.show', $perencanaan->id) }}"
                                                class="btn btn-sm btn-primary">View</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--Row-->
    </div>

    @push('js')
        <script src="{{ asset('asset/vendor/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('asset/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

        <script>
            $(document).ready(function() {
                $('#dataTable').DataTable(); // ID From dataTable 
                $('#dataTableHover').DataTable(); // ID From dataTable with Hover
            });
        </script>
    @endpush
</x-app-layout>
