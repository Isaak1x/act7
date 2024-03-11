<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoboticaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roboticas')->insert([
            [
                'nombre_kit' => 'StarterKit',
            ],
            [
                'nombre_kit' => 'Educational Robotics Kit',
            ],
            [
                'nombre_kit' => 'Kit5',
            ],
        ]);
    }
}
