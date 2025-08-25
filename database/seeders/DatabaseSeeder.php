<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create admin user if not exists
        User::updateOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin User',
                'username' => 'admin',
                'password' => Hash::make('password'),
                'role' => 'admin',
            ]
        );

        // Create regular user if not exists
        User::updateOrCreate(
            ['email' => 'user@example.com'],
            [
                'name' => 'Regular User',
                'username' => 'user',
                'password' => Hash::make('password'),
                'role' => 'user',
            ]
        );

        // \App\Models\User::factory(10)->create();
    }
}
