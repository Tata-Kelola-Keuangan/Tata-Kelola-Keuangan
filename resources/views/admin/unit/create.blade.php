<x-app-layout>
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Unit</h1>
        </div>

        <div class="row">
            <div class="col-lg-12 mb-6">
                <div class="card">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between"></div>

                    <form method="POST" action="{{ route('admin.unit.store') }}">
                        @csrf

                        <div class="row mx-auto">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="unit_name">Nama Unit</label>
                                    <input id="unit_name" type="text" class="form-control" name="name"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="singkatan">Penanggung Jawab</label>
                                    <input id="singkatan" type="text" class="form-control" name="singkatan"/>
                                </div>
                            </div>
                        </div>

                        <div class="text-center mt-3">
                            <button type="submit" class="btn btn-primary mb-4">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
