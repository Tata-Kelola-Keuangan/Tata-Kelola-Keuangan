@push('css')
    <link href="{{ asset('asset/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

<x-app-layout>
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ $perencanaans->kd_perencanaan }}</h1>
        </div>        

        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="row mt-3 mr-2">
                        <div class="col-lg-12">
                            <div class="d-flex justify-content-end">
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModalCenter" id="#modalCenter">Tambah</button>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive p-3">
                        <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                            <thead class="thead-light">
                                <tr>
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
                                        <td>{{ $perencanaan->kd_perencanaan }}</td>
                                        <td>{{ $perencanaan->nama }}</td>
                                        <td>{{ $perencanaan->sumber }}</td>
                                        <td>{{ $perencanaan->revisi }}</td>
                                        <td>{{ $perencanaan->unit->nama }}</td>
                                        <td>
                                            <a href="{{ route('admin.perencanaan.sub_perencanaan.show', $sub_perencanaans->id) }}"
                                                class="btn btn-sm btn-primary">
                                                <i class="fas fa-arrow-up-right-from-square"></i>
                                                View
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Perencanaan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{ route('admin.perencanaan.store') }}">
                    @csrf
                    <div class="modal-body">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama">Nama Perencanaan</label>
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        aria-describedby="emailHelp" placeholder="Masukkan nama" required>
                                </div>
                                <div class="form-group">
                                    <label for="kd_perencanaan">Kode Perencanaan</label>
                                    <input type="text" class="form-control" id="kd_perencanaan" name="kd_perencanaan"
                                        aria-describedby="emailHelp" placeholder="Masukkan kode perencanaan" required>
                                </div>
                                <div class="form-group">
                                    <label for="sumber">Sumber Dana</label>
                                    <input type="text" class="form-control" id="sumber" name="sumber"
                                        aria-describedby="emailHelp" placeholder="Masukkan sumber dana" required>
                                </div>
                                <div class="form-group">
                                    <label for="revisi">Revisi</label>
                                    <input type="text" class="form-control" id="revisi" name="revisi"
                                        aria-describedby="emailHelp" placeholder="Masukkan revisi" required>
                                </div>
                                <div class="form-group">
                                    <label for="unit_id">Unit</label>
                                    <select class="form-control" id="unit_id" name="unit_id" required>
                                        <option value="">Select Unit</option>
                                        @foreach ($units as $unit)
                                            <option value="{{ $unit->id }}">{{ $unit->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
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
