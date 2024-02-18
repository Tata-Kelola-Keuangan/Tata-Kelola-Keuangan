<x-<x-app-layout>
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit User</h1>
        </div>

        <div class="row">
            <div class="col-lg-12 mb-6">
                <div class="card">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between"></div>
                    @can('User edit')
                    <form method="POST" action="{{ route('admin.user.update', ['user' => $user->id]) }}">
                        @csrf
                        @method('PUT')

                        <div class="row mx-auto">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="nama">Nama User</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Masukkan Nama" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="example@gmail.com" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mx-auto">
                            <div class="col">
                            <label for="roles">Tipe User</label>
                                <select class="form-control" type="roles" name="roles[]" id="roles" required>
                                    <option value="">Pilih Role</option>
                                    @foreach ($roles as $role)
                                    <option value="{{$role}}">{{$role}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mx-auto">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Kosongkan Jka Tidak Ingin Mengganti Password" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="confirm-password">Konfirmasi Password</label>
                                    <input type="password" class="form-control" id="confirm-password"
                                        name="confirm-password" placeholder="Konfirmasi Password" required>
                                </div>
                            </div>
                        </div>

                        <div class="text-center mt-3">
                        <button type="submit" class="btn btn-primary mb-9">Simpan</button>
                        </div>
                    </form>
                    @endcan
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
