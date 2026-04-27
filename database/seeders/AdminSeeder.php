<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name'     => 'Super Admin',
            'email'    => 'admin@zippywebsite.com',
            'password' => Hash::make('Admin@1234'),
            'role'     => 'superadmin',
        ]);
    }
}