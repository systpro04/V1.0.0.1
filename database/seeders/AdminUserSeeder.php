<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    public function run()
    {

        User::create([
            'name' => 'Admin Name',
            'username' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('1'),
            'role_id' => 1,
        ]);

        User::create([
            'name' => 'Regular User',
            'username' => 'user',
            'email' => 'user@example.com',
            'password' => Hash::make('1'),
            'role_id' => 2,
        ]);
    }
}
