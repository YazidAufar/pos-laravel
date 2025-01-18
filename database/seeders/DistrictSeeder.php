<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class DistrictSeeder extends Seeder
{
    public function run(): void
    {
        $sqlPath = database_path('seeders/data/laravel_pos_districts.sql');
        if (File::exists($sqlPath)) {
            DB::unprepared(File::get($sqlPath));
            $this->command->info('Districts data seeded successfully!');
        } else {
            $this->command->error('Districts SQL file not found.');
        }
    }
}
