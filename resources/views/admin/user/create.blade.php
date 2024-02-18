<x-app-layout>
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah User</h1>
        </div>

        <div class="row">
            <div class="col-lg-12 mb-6">
                <div class="card">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between"></div>
                    @can('User create')
                    <form method="POST" action="{{ route('admin.user.store') }}">
                        @csrf

                        <div class="row mx-auto">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Masukkan Nama" required>
                                </div>
                            </div>
                <div class="form-group">
                    <label for="roles">Jenis</label>
                    <select class="form-control" id="roles" name="roles[]" aria-label="Default select example" required>
                        <option selected disabled>Pilih Role</option>
                        @foreach ($roles as $role)
                            <option value="{{ $role }}">{{ $role }}</option>
                        @endforeach
                    </select>
                </div>
                        <div class="form-group mx-auto">
                            <div class="col">
                                <select class="form-control" type="roles" name="roles[]" id="roles" required>
                                    <option value="">Pilih Role</option>
                                    @foreach ($roles as $role)
                                    <option value="{{$role}}">{{$role}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                <div class="form-group">
                    <label for="roles">Jenis</label>
                    <select class="form-control" id="roles" name="roles[]" aria-label="Default select example" required>
                        <option selected disabled>Pilih Role</option>
                        @foreach ($roles as $role)
                            <option value="{{ $role }}">{{ $role }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="example@gmail.com"
                        required>
                </div>

                        <div class="row mx-auto">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="password" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="password" class="form-control" id="confirm-password"
                                        name="confirm-password" placeholder="konfirmasi password" required>
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
