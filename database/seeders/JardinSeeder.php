<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JardinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jardins')->insert([
            'name' => 'Solicode-Jardin',
            'espace' => 'Solicode',
            'jardinier_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
