<x-app-layout>
<x-app-layout>
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Perencanaan</h1>
        </div>

        <div class="row">
            <div class="col-lg-12 mb-6">
                <div class="card">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between"></div>
                    @can('User create')
                    <form method="POST" action="{{ route('admin.perencanaan.update') }}">
                        @csrf

                        <div class="row mx-auto">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama">Nama Perencanaan</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Masukkan Nama" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="sumber">sumber</label>
                                    <input type="sumber" class="form-control" id="sumber" name="sumber"
                                        placeholder="Sumber Perencanaan" required>
                                </div>
                            </div>
                        </div>

                        <div class="row mx-auto">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="revisi">Revisi</label>
                                    <select class="form-control" id="revisi" name="revisi"
                                        aria-label="Default select example" required>
                                        <option value="" selected disabled>Pilih Status</option>
                                        <option value="proses">Proses</option>
                                        <option value="ya">Revisi</option>
                                        <option value="tidak">Proses</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="unit_id">Unit</label>
                                    <select class="form-control" id="unit_id" name="unit_id"
                                        aria-label="Default select example" required>
                                        <option value="">Pilih Unit</option>
                                        <option value="dosn">dosen</option>
                                        @foreach ($units as $unit)
                                        <option value="{{ $unit->id }}">{{ $unit->nama }}
                                            ({{ $unit->singkatan }})
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="text-center mt-3">
                            <button type="submit" class="btn btn-primary mb-4">Tambahkan</button>
                        </div>
                    </form>
                    @endcan
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

</x-app-layout>