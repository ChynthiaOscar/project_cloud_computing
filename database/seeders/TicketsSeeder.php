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
            'price' => 500000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // premium
        DB::table('tickets')->insert([
            'type' => 'Premium',
            'price' => 300000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // standard
        DB::table('tickets')->insert([
            'type' => 'Standard',
            'price' => 100000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
