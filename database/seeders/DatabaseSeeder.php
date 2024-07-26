<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::factory()->create([
            'nama' => 'Alec Thompson',
            'email' => 'admin@corporateui.com',
            'password' => Hash::make('secret'),
            'daerah' => "pusat",
            'role' => 'Admin',
        ]);
        User::factory()->create([
            'nama' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
            'daerah' => "pusat",
            'role' => 'Surveyor',
        ]);
        User::factory()->create([
            'nama' => 'test',
            'email' => 'test@admin.com',
            'password' => Hash::make('test'),
            'daerah' => "pusat",
            'role' => 'User',
        ]);
    }
}
