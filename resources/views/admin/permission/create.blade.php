<x-app-layout>
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Akses</h1>
        </div>

        <div class="row">
            <div class="col-lg-12 mb-6">
                <div class="card">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between"></div>
                    @can('Permission create')
                    <form method="POST" action="{{ route('admin.permissions.store') }}">
                        @csrf
                        @method('post')

                        <div class="row mx-auto">
                            <div class="col-md-6">
                                <div class="flex flex-col space-y-2">
                                    <label for="role_name" class="text-gray-700 select-none font-medium">Hak
                                        Akses</label>
                                    <input id="role_name" type="text" name="name" value="{{ old('name') }}"
                                        placeholder="Enter permission"
                                        class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200" />
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
