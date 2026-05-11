<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder; // Seeder base class

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::create([
            'name' => 'nusaNext', // Nama admin
            'email' => 'agusraha66@gmail.com', // Email admin, ganti sesuai kebutuhan
            'password' => \Illuminate\Support\Facades\Hash::make('nusaNext123'), // Password admin, ganti dengan password yang aman
            'role' => 'admin', // Role admin
        ]);
    }
}
