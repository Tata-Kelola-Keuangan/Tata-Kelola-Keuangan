<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Spatie\Permission\Models\Permission;



class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('role_or_permission:User access|User create|User edit|User delete', ['only' => ['index', 'show']]);
        $this->middleware('role_or_permission:User create', ['only' => ['create', 'store']]);
        $this->middleware('role_or_permission:User edit', ['only' => ['edit', 'update']]);
        $this->middleware('role_or_permission:User delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $user = User::latest()->get();

        return view('admin.user.index', ['users' => $user]);
    }

    public function create()
    {
        $roles = Role::pluck('name', 'name')->all();
        return view('admin.user.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);

        $input = $request->all();
        $input['password'] = FacadesHash::make($input['password']);

        $user = User::create($input);

        $pegawai = Pegawai::create([
            'nama' => $user->name,
            'email' => $user->email,
            'user_id' => $user->id,
        ]);


        $user->assignRole($request->input('roles'));

        return redirect()->route('admin.user.index')->with('success', 'User created successfully');
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('admin.user.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name', 'name')->all();
        $userRole = $user->roles->pluck('name', 'name')->all();

        return view('admin.user.edit', compact('user', 'roles', 'userRole'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);

        $input = $request->all();
        if (!empty($input['password'])) {
            $input['password'] = FacadesHash::make($input['password']);
        } else {
            $input = Arr::except($input, array('password'));
        }

        $user = User::find($id);
        $user->update($input);
        FacadesDB::table('model_has_roles')->where('model_id', $id)->delete();

        $user->assignRole($request->input('roles'));

        return redirect()->route('admin.user.index')->with('success', 'User updated successfully');
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('admin.user.index')->with('success', 'User deleted successfully');
    }
}
