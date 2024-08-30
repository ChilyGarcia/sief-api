<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CareerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('careers')->upsert(
            [
                'name' => 'Software Engineer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            ['id'],
            ['name', 'updated_at']
        );
    }
}
