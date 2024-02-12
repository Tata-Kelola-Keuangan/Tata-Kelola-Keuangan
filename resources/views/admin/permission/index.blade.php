<x-app-layout>
    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Permission</h1>
            @can('Permission create')
            <a type="button" class="btn btn-primary mb-1" href="{{ route('admin.permissions.create') }}">Tambah
                Permission</a>
            @endcan
        </div>

        <div class="row">
            <div class="col-lg-12 mb-4">
                <!-- Simple Tables -->
                <div class="card">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Simple Tables</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr class="text-center">
                                    <th>Permission Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @can('Permission access')
                                @foreach ($permissions as $permission)
                                <tr class="text-center">
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $permission->name }}</td>
                                    <td class="py-4 px-6 border-b border-grey-light text-right">
                                        @can('Permission edit')
                                        <a href="{{ route('admin.permissions.edit', $permission->id) }}"
                                            class="btn btn-primary">Edit</a>
                                        @endcan

                                        @can('Permission delete')
                                        <form action="{{ route('admin.permissions.destroy', $permission->id) }}"
                                            method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus User ini?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer"></div>
                </div>
            </div>
        </div>
</x-app-layout>
