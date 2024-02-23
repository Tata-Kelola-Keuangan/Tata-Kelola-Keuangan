<x-app-layout>
    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">User</h1>
            @can('User create')
                <button type="button" class="btn btn-primary mb-1" data-toggle="modal" data-target="#ModalUser"
                    id="#modalCenter">
                    Tambah
                </button>
            @endcan
        </div>

        {{-- modal tambah user --}}
        <div class="modal fade" id="ModalUser" tabindex="-1" role="dialog" aria-labelledby="ModalUserTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalUserTitle">Tambah User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="POST" action="{{ route('admin.user.store') }}">
                        @csrf
                        <div class="modal-body">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="nama">Nama User</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Masukkan Nama" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="roles">Tipe User</label>
                                        <select class="form-control" type="roles" name="roles[]" id="roles"
                                            required>
                                            <option value="">Pilih Role</option>
                                            @foreach ($roles as $role)
                                                <option value="{{ $role }}">{{ $role }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="example@gmail.com" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password"
                                            placeholder="Masukkan Password" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="confirm-password">Konfirmasi Password</label>
                                        <input type="password" class="form-control" id="confirm-password"
                                            name="confirm-password" placeholder="Konfirmasi Password" required>
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

        <div class="row">
            <div class="col-lg-12 mb-4">
                <!-- Simple Tables -->
                <div class="card">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
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
                                @can('User access')
                                    @foreach ($users as $user)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                @foreach ($user->roles as $role)
                                                    <span class="badge badge-secondary">{{ $role->name }}</span>
                                                @endforeach
                                            </td>
                                            <td class="text-center">
                                                @can('User edit')
                                                    <a href="{{ route('admin.user.edit', ['user' => $user->id]) }}"
                                                        class="btn btn-primary">Edit</a>
                                                @endcan

                                                @can('User delete')
                                                    <form action="{{ route('admin.user.destroy', ['user' => $user->id]) }}"
                                                        method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger"
                                                            onclick="return confirm('Apakah Anda yakin ingin menghapus User ini?')">Hapus</button>
                                                    </form>
                                                @endcan
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
    </div>
</x-app-layout>
