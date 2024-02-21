@push('css')
    <link href="{{ asset('asset/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

<x-app-layout>
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-center mb-4">
            <h4>{{ $perencanaan->kd_perencanaan }} - {{ $perencanaan->nama }}</h4>
        </div>

        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Kegiatan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="POST" action="{{ route('admin.perencanaan.sub_perencanaan.store') }}">
                        @csrf
                        <div class="modal-body">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="kegiatan">Kegiatan</label>
                                        <input type="text" class="form-control" id="kegiatan" name="kegiatan"
                                            placeholder="Masukkan kegiatan" required>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="satuan">Satuan</label>
                                                <input type="text" class="form-control" id="satuan" name="satuan"
                                                    placeholder="Masukkan satuan" required>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="form-group">
                                                <label for="volume">Volume</label>
                                                <input type="text" class="form-control" id="volume" name="volume"
                                                    placeholder="Masukkan volume" required>
                                            </div>
                                        </div>                                        

                                        <div class="col">
                                            <div class="form-group">
                                                <label for="harga_satuan">Harga Satuan</label>
                                                <input type="number" class="form-control" id="harga_satuan"
                                                    name="harga_satuan" placeholder="Masukkan harga satuan" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="output">Output</label>
                                        <input type="text" class="form-control" id="output" name="output"
                                            placeholder="Output" readonly>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="rencana_mulai">Rencana Mulai</label>
                                                <div class="input-group date">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fas fa-calendar"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" id="rencana_mulai"
                                                        name="rencana_mulai" value="{{ date('Y-m-d') }}" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="form-group">
                                                <label for="rencana_bayar">Rencana Bayar</label>
                                                <div class="input-group date">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fas fa-calendar"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" id="rencana_bayar"
                                                        name="rencana_bayar" value="{{ date('Y-m-d') }}" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="pic_id">PIC</label>
                                        <select class="form-control" id="pic_id" name="pic_id" required>
                                            <option value="">Select PIC</option>
                                            @foreach ($pegawai as $pegawai)
                                                <option value="{{ $pegawai->id }}">{{ $pegawai->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="ppk_id">PPK</label>
                                        <select class="form-control" id="ppk_id" name="ppk_id" required>
                                            <option value="">Select PPK</option>
                                            @foreach ($ppk as $ppk)
                                                <option value="{{ $ppk->id }}">{{ $ppk->tahun_anggaran }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <input type="hidden" name="perencanaan_id" value="{{ $perencanaan->id }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-primary"
                                data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="row mb-3 mt-4 mr-4 ml-4">
                        <div class="col-lg-12">
                            <div class="d-flex justify-content-between">
                                <button type="button" class="btn btn-secondary" onclick="window.history.back();">
                                    <i class="fas fa-arrow-left"></i>
                                    Kembali
                                </button>
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModalCenter" id="#modalCenter">
                                    Tambah
                                </button>
                            </div>
                        </div>
                    </div>

                    @if ($sub_perencanaans->isEmpty())
                        <div class="card">
                            <div class="col-lg-12 mt-md-5">
                                <div class="customer-message text-center">
                                    <h5 class="text-truncate message-title">
                                        <strong>Belum ada Properti Program Kerja</strong>
                                    </h5>
                                    <h6 class="small text-gray-500 message-time font-weight-bold">
                                        Silahkan isikan data dengan menekan tombol di bawah ini
                                    </h6>
                                </div>
                            </div>
                            <div class="card-footer text-center mb-1">
                                <div class="col-lg-12">
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#exampleModalCenter" id="#modalCenter">
                                        <i class="fas fa-plus"></i>
                                        Tambah Program Kerja
                                    </button>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="table-responsive p-3">
                            <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                                <thead class="thead-light">
                                    <tr class="text-center">
                                        <th>Kode Perencanaan</th>
                                        <th>Kegiatan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sub_perencanaans as $sub_perencanaan)
                                        <tr>
                                            <td>{{ $sub_perencanaan->id }}</td>
                                            <td>{{ $sub_perencanaan->kegiatan }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('admin.perencanaan.sub_perencanaan.show', $sub_perencanaan->id) }}"
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
                    @endif
                </div>
            </div>
        </div>
    </div>

    @push('js')
        <script src="{{ asset('asset/vendor/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('asset/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('asset/vendor/select2/dist/js/select2.min.js') }}"></script>
        <script src="{{ asset('asset/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
        <script src="{{ asset('asset/vendor/bootstrap-touchspin/js/jquery.bootstrap-touchspin.js') }}"></script>
        <script src="{{ asset('asset/vendor/clock-picker/clockpicker.js') }}"></script>

        <script>
            $(document).ready(function() {
                $('#dataTable').DataTable();
                $('#dataTableHover').DataTable();
            });
        </script>

        <script>
            $('#simple-date1 .input-group.date').datepicker({
                format: 'yyyy-mm-dd',
                todayBtn: 'linked',
                todayHighlight: true,
                autoclose: true,
            });
        </script>

        <script>
            const satuan = document.getElementById('satuan');
            const hargaSatuan = document.getElementById('harga_satuan');
            const output = document.getElementById('output');

            satuan.addEventListener('input', calculateOutput);
            hargaSatuan.addEventListener('input', calculateOutput);

            function calculateOutput() {
                const satuanValue = parseFloat(satuan.value) || 0;
                const hargaSatuanValue = parseFloat(hargaSatuan.value) || 0;
                const hasil = satuanValue * hargaSatuanValue;
                output.value = hasil.toFixed(2);
            }
        </script>
    @endpush
</x-app-layout>
