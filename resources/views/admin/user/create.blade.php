<x-app-layout>
    <div class="container">
        <h1>Tambah User</h1>

        @can('User create')
            <form method="POST" action="{{ route('admin.user.store') }}">
                @csrf

                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama"
                        required>
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

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="********"
                        required>
                </div>

                <div class="form-group">
                    <label for="confirm-password">Konfirmasi Password</label>
                    <input type="password" class="form-control" id="confirm-password" name="confirm-password"
                        placeholder="********" required>
                </div>

                <div class="text-center mt-3">
                    <button type="submit" class="btn btn-primary">Tambahkan</button>
                </div>
            </form>
        @endcan
    </div>
</x-app-layout>
