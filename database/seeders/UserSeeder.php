<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Owner',
            'email' => 'owner@gmail.com',
            'password' => bcrypt('password123'),
        ]);
    }
}
