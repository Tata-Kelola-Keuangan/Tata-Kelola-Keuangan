<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
  
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $users = [
            [
                'name'=>'Admin',
                'email'=>'admin@gmail.com',
                'usertype'=>'Admin',
                'password'=> bcrypt('1234567'),
             ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}