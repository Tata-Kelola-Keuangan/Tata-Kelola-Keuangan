<x-app-layout>
    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Unit</h1>
            @can('Role create')
                <a type="button" class="btn btn-primary mb-1" href="{{ route('admin.unit.create') }}">Tambah Unit</a>
            @endcan
        </div>

        <div class="row">
            <div class="col-lg-12 mb-4">
                <!-- Simple Tables -->
                <div class="card">
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr  class="text-center">
                                    <th>Nama Unit</th>
                                    <th>Penanggung Jawab</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @can('Role access')
                                    @foreach ($units as $unit)
                                        <tr class="text-center">
                                            <td>{{ $unit->nama }}</td>
                                            <td>{{ $unit->singkatan }}</td>
                                            <td>
                                                <div style="justify-content-center">
                                                    <a href="{{ route('admin.unit.edit', $unit->id) }}"
                                                        class="btn btn-primary mr-2">Edit</a>
                                                    <form action="{{ route('admin.unit.destroy', $unit->id) }}"
                                                        method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger"
                                                            onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endcan
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
