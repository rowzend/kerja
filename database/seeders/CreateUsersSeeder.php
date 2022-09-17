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
               'name'=>'Master User',
               'email'=>'master@master.com',
               'type'=>4,
               'password'=> bcrypt('master'),
            ],
            [
               'name'=>'Admin User',
               'email'=>'admin@admin.com',
               'type'=> 3,
               'password'=> bcrypt('admin'),
            ],
            [
               'name'=>'User3',
               'email'=>'user3@user.com',
               'type'=>2,
               'password'=> bcrypt('user'),
            ],
            [
                'name'=>'User2',
                'email'=>'user2@user.com',
                'type'=>1,
                'password'=> bcrypt('user'),
             ],
             [
                'name'=>'User1',
                'email'=>'user1@user.com',
                'type'=>0,
                'password'=> bcrypt('user'),
             ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
