<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    public function run()
    {

        $user = [
            [
               'name'=>'Admin',
               'username'=>'admin',
               'email'=>'admin@gmail.com',
                'is_admin'=>'1',
               'password'=> bcrypt('1'),
            ],
            [
               'name'=>'User',
               'username'=>'user',
               'email'=>'user@gmail.com',
                'is_admin'=>'0',
               'password'=> bcrypt('1'),
            ],
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
