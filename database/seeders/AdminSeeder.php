<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
            'profile' => 'default.png'
        ]);

        $admin_role = Role::create(['name' => 'Administrator']);
        $staff_role = Role::create(['name' => 'Staff']);

        $permission = Permission::create(['name' => 'User access']);
        $permission = Permission::create(['name' => 'User edit']);
        $permission = Permission::create(['name' => 'User create']);
        $permission = Permission::create(['name' => 'User delete']);

        $permission = Permission::create(['name' => 'Role access']);
        $permission = Permission::create(['name' => 'Role edit']);
        $permission = Permission::create(['name' => 'Role create']);
        $permission = Permission::create(['name' => 'Role delete']);

        $permission = Permission::create(['name' => 'Permission access']);
        $permission = Permission::create(['name' => 'Permission edit']);
        $permission = Permission::create(['name' => 'Permission create']);
        $permission = Permission::create(['name' => 'Permission delete']);

        $permission = Permission::create(['name' => 'Pegawai access']);
        $permission = Permission::create(['name' => 'Pegawai edit']);
        $permission = Permission::create(['name' => 'Pegawai create']);
        $permission = Permission::create(['name' => 'Pegawai delete']);

        $permission = Permission::create(['name' => 'Perencanaan access']);
        $permission = Permission::create(['name' => 'Perencanaan edit']);
        $permission = Permission::create(['name' => 'Perencanaan create']);
        $permission = Permission::create(['name' => 'Perencanaan delete']);

        $permission = Permission::create(['name' => 'Pelaksanaan access']);
        $permission = Permission::create(['name' => 'Pelaksanaan edit']);
        $permission = Permission::create(['name' => 'Pelaksanaan create']);
        $permission = Permission::create(['name' => 'Pelaksanaan delete']);

        $permission = Permission::create(['name' => 'Laporan delete']);


        $admin->assignRole($admin_role);


        $admin_role->givePermissionTo(Permission::all());
    }
}
