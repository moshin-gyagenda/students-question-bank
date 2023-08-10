<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();
        \DB::table('users')->insert(array (
            0=> array(
                'id'=>1,
                'name'=>'Fahad Lubwama',
                'username'=>'Lubwama',
                'email'=>'admin@gmail.com',
                'password'=>bcrypt('admin123'),
                'role'=>'admin',
                'phone_number'=>'0706072232',
                'profile_picture'=>'/uploads/avarta.png',
            ),
            1=> array(
                'id'=>2,
                'name'=>'Nassaka Belinda',
                'username'=>'Belinda',
                'email'=>'student@gmail.com',
                'password'=>bcrypt('student123'),
                'role'=>'student',
                'phone_number'=>'0701174963',
                'profile_picture'=>'/uploads/avarta.png',
            )
            
              
        ));
    }
}
