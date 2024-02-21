<x-app-layout>
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-center mb-4">
            <h4>Detail Sub Perencanaan</h4>
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

                    <div class="card-body">
                        <div class="form-group">
                            <label for="kegiatan">Kegiatan</label>
                            <input type="text" class="form-control" id="kegiatan" name="kegiatan"
                                value="{{ $sub_perencanaans->kegiatan }}" disabled>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="satuan">Satuan</label>
                                    <input type="text" class="form-control" id="satuan" name="satuan"
                                        value="{{ $sub_perencanaans->satuan }}" disabled>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label for="volume">Volume</label>
                                    <input type="text" class="form-control" id="volume" name="volume"
                                        value="{{ $sub_perencanaans->volume }}" disabled>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label for="harga_satuan">Harga Satuan</label>
                                    <input type="text" class="form-control" id="harga_satuan" name="harga_satuan"
                                        value="{{ $sub_perencanaans->harga_satuan }}" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="output">Output</label>
                            <input type="text" class="form-control" id="output" name="output"
                                value="{{ $sub_perencanaans->output }}" disabled>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="rencana_mulai">Rencana Mulai</label>
                                    <input type="text" class="form-control" id="rencana_mulai" name="rencana_mulai"
                                        value="{{ $sub_perencanaans->rencana_mulai }}" disabled>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label for="rencana_bayar">Rencana Bayar</label>
                                    <input type="text" class="form-control" id="rencana_bayar" name="rencana_bayar"
                                        value="{{ $sub_perencanaans->rencana_bayar }}" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="pic_id">PIC</label>
                                    <input type="text" class="form-control" id="pic_id" name="pic_id"
                                        value="{{ $sub_perencanaans->pic_id }}" disabled>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label for="ppk_id">PPK</label>
                                    <input type="text" class="form-control" id="ppk_id" name="ppk_id"
                                        value="{{ $sub_perencanaans->ppk_id }}" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
