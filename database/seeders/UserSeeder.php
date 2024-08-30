<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->upsert(
            [
                'name' => 'admin',
                'email' => 'admin@sief.com',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
            ],
            ['id'],
            ['name', 'email', 'password', 'role', 'updated_at']
        );
    }
}
