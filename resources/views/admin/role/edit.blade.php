<x-app-layout>
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Akses</h1>
        </div>

        <div class="row">
            <div class="col-lg-12 mb-6">
                <div class="card">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between"></div>

                    @can('Role edit')
                    <form method="POST" action="{{ route('admin.roles.update', $role->id) }}">
                        @csrf
                        @method('put')

                        <div class="row mx-auto">
                            <div class="col-md-6">
                                <div class="flex flex-col space-y-2">
                                    <label for="role_name" class="text-gray-700 select-none font-medium">Role
                                        Name</label>
                                    <input id="role_name" type="text" name="name" value="{{ old('name', $role->name) }}"
                                        placeholder="Placeholder"
                                        class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200" />
                                </div>
                            </div>
                        </div>

                        <div class="row mx-auto">
                            @foreach ($permissions as $permission)
                            <div class="col-md-3">
                                <div class="flex flex-col justify-center">
                                    <div class="flex flex-col">
                                        <label class="inline-flex items-center mt-3">
                                            <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600"
                                                name="permissions[]" value="{{ $permission->id }}"
                                                @if(count($role->permissions->where('id', $permission->id)) > 0) checked
                                            @endif>
                                            <span class="ml-2 text-gray-700">{{ $permission->name }}</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <div class="text-center mt-3">
                        <button type="submit" class="btn btn-primary mb-4">Simpan</button>
                        </div>
                    </form>
                    @endcan
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
