<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // vip
        DB::table('tickets')->insert([
            'type' => 'VIP',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // premium
        DB::table('tickets')->insert([
            'type' => 'Premium',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // standard
        DB::table('tickets')->insert([
            'type' => 'Standard',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
