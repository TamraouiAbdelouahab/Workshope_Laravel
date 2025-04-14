<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JardinierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jardiniers')->insert([
            'name' => 'Hassan',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('jardiniers')->insert([
            'name' => 'Hamid',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('jardiniers')->insert([
            'name' => 'Bouzidi',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }


}
