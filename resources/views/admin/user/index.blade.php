<x-app-layout>
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">User</h1>
        <a type="button" class="btn btn-primary mb-1" href="{{ route('admin.user.create') }}">Tambah User</a>
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
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Tipe User</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->usertype }}</td>
                                <td>
                                    <a href="{{ route('admin.user.edit', ['user' => $user->id]) }}"
                                        class="btn btn-primary">Edit</a>
                                    <form action="{{ route('admin.user.destroy', ['user' => $user->id]) }}" method="POST"
                                        style="display: inline;">
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
