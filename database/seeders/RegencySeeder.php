<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RegencySeeder extends Seeder
{
    public function run(): void
    {
        $sqlPath = database_path('seeders/data/laravel_pos_regencies.sql');
        if (File::exists($sqlPath)) {
            DB::unprepared(File::get($sqlPath));
            $this->command->info('Regencies data seeded successfully!');
        } else {
            $this->command->error('Regencies SQL file not found.');
        }
    }
}
