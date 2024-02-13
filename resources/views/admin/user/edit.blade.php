<x-app-layout>
    <div class="container">
        <h1>Edit User</h1>

        @can('User edit')
            <form method="POST" action="{{ route('admin.user.update', ['user' => $user->id]) }}">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="name" class="form-control" id="name" name="name" value="{{ $user->name }}"
                        required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}"
                        required>
                </div>

                <div class="form-group">
                    <label for="password">Kata Sandi Baru (opsional)</label>
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="Biarkan kosong jika tidak ingin mengubah kata sandi">
                </div>

                <div class="form-group">
                    <label for="confirm-password">Konfirmasi Password</label>
                    <input type="password" class="form-control" id="confirm-password" name="confirm-password">
                </div>

                <div class="form-group">
                    <label for="roles">Role</label>
                    <select class="form-control" id="roles" name="roles[]">
                        @foreach ($roles as $role)
                            <option value="{{ $role }}" {{ $user->usertype == $role ? 'selected' : '' }}>
                                {{ $role }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="text-center mt-3">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        @endcan
    </div>
</x-app-layout>
