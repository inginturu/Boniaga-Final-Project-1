<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::firstOrCreate(
            [
                'email' => 'boniaga@gmail.com' // GANTI DENGAN EMAIL ADMIN ANDA
            ],
            [
                'name' => 'Boniaga', // GANTI DENGAN NAMA ADMIN ANDA
                'password' => Hash::make('admin123'), // GANTI DENGAN PASSWORD YANG AMAN
                'email_verified_at' => now(), // INI KUNCI PENTING untuk mengatasi error 403 di Filament
            ]
        );
    }
}
