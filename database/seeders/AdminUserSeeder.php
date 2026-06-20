<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'mydialy@cook.com',
            'password' => Hash::make('123456789'), // ganti sesuai mau kamu
        ]);
    }
}
