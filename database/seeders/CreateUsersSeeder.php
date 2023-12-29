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
    public function run()
    {
        $users = [
            [
               'name'=>'Admin',
               'email'=>'slebgroup10@gmail.com',
               'NIC'=>'19982230543',
               'Contact'=>'0700508000',
               'type'=>1,
               'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'user',
                'email'=>'userslebgroup10@gmail.com',
                'NIC'=>'19982230545',
                'Contact'=>'0700508111',
                'type'=>0,
                'password'=> bcrypt('1234567'),
             ],




        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
