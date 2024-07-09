<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => "Admin",
            'email' => "admin@gmail.com",
            'password' => bcrypt('admin123'),
            'remember_token' =>  Str::random(30)
        ]);
    }
}
