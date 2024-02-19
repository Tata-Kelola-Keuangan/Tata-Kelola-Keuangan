@push('css')
    <link href="{{ asset('asset/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

<x-app-layout>
    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Pegawai</h1>
            @can('Pegawai create')
                <a type="button" class="btn btn-primary mb-1" href="{{ route('admin.pegawai.create') }}">Tambah Pegawai</a> 
            @endcan
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="table-responsive p-3">
                        <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                            <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Nomor_Induk</th>
                                    <th>Status</th>
                                    <th>Email</th>
                                    <th>Unit</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @can('Pegawai access')
                                    @foreach ($pegawai as $pegawai)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td>{{ $pegawai->NIK }}</td>
                                            <td>{{ $pegawai->nama }}</td>
                                            <td>{{ $pegawai->nomor_induk }}</td>
                                            <td>{{ $pegawai->status }}</td>
                                            <td>{{ $pegawai->email }}</td>
                                            <td>{{ $pegawai->unit_id }}</td>
                                            <td class="text-center">
                                                @can('Pegawai edit')
                                                    <a href="{{ route('admin.pegawai.edit', ['pegawai' => $pegawai->id]) }}"
                                                        class="btn btn-primary mr-2">View</a>
                                                @endcan
                                            </td>
                                        </tr>
                                    @endforeach
                                @endcan
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
            </div>
        </div>
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
