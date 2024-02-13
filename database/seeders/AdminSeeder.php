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
            'profile' => 'user.avif'
        ]);

        $BisnisInformatika = User::create([
            'name' => 'Bisnis dan Informatika',
            'email' => 'informatika@gmail.com',
            'password' => bcrypt('12345678'),
            'profile' => 'user.avif',
        ]);

        $TeknikSipil = User::create([
            'name' => 'Teknik Sipil',
            'email' => 'sipil@gmail.com',
            'password' => bcrypt('12345678'),
            'profile' => 'user.avif',
        ]);

        $TeknikMesin = User::create([
            'name' => 'Teknik Mesin',
            'email' => 'mesin@gmail.com',
            'password' => bcrypt('12345678'),
            'profile' => 'user.avif',
        ]);

        $Pertanian = User::create([
            'name' => 'Pertanian',
            'email' => 'pertanian@gmail.com',
            'password' => bcrypt('12345678'),
            'profile' => 'user.avif',
        ]);

        $Pariwisata = User::create([
            'name' => 'Pariwisata',
            'email' => 'pariwisata@gmail.com',
            'password' => bcrypt('12345678'),
            'profile' => 'user.avif',
        ]);


        $admin_role = Role::create(['name' => 'Administrator']);
        $informatika_role = Role::create(['name' => 'Bisnis dan Informatika']);
        $sipil_role = Role::create(['name' => 'Teknik Sipil']);
        $mesin_role = Role::create(['name' => 'Teknik Mesin']);
        $pertanian_role = Role::create(['name' => 'Pertanian']);
        $pariwisata_role = Role::create(['name' => 'Pariwisata']);

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

        $permission = Permission::create(['name' => 'Perencanaan access']);
        $permission = Permission::create(['name' => 'Perencanaan edit']);
        $permission = Permission::create(['name' => 'Perencanaan create']);
        $permission = Permission::create(['name' => 'Perencanaan delete']);

        $permission = Permission::create(['name' => 'Pelaksanaan access']);
        $permission = Permission::create(['name' => 'Pelaksanaan edit']);
        $permission = Permission::create(['name' => 'Pelaksanaan create']);
        $permission = Permission::create(['name' => 'Pelaksanaan delete']);

        $permission = Permission::create(['name' => 'Laporan access']);
        $permission = Permission::create(['name' => 'Laporan delete']);


        $admin->assignRole($admin_role);
        $BisnisInformatika->assignRole($informatika_role);
        $TeknikSipil->assignRole($sipil_role);
        $TeknikMesin->assignRole($mesin_role);
        $Pertanian->assignRole($pertanian_role);
        $Pariwisata->assignRole($pariwisata_role);


        $admin_role->givePermissionTo(Permission::all());
    }
}
