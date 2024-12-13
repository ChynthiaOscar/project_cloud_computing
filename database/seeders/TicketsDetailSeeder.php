<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TicketsDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ice hockey
        DB::table('tickets_details')->insert([
            'package_id' => 1,
            'ticket_id' => 1,
            'quota' => 2,
            'price' => 500,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 1,
            'ticket_id' => 2,
            'quota' => 3,
            'price' => 300,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 1,
            'ticket_id' => 3,
            'quota' => 5,
            'price' => 200,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 2,
            'ticket_id' => 1,
            'quota' => 2,
            'price' => 500,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 2,
            'ticket_id' => 2,
            'quota' => 3,
            'price' => 300,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 2,
            'ticket_id' => 3,
            'quota' => 5,
            'price' => 200,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 3,
            'ticket_id' => 1,
            'quota' => 2,
            'price' => 500,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 3,
            'ticket_id' => 2,
            'quota' => 3,
            'price' => 300,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 3,
            'ticket_id' => 3,
            'quota' => 5,
            'price' => 200,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 4,
            'ticket_id' => 1,
            'quota' => 2,
            'price' => 500,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 4,
            'ticket_id' => 2,
            'quota' => 3,
            'price' => 300,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 4,
            'ticket_id' => 3,
            'quota' => 5,
            'price' => 200,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 5,
            'ticket_id' => 1,
            'quota' => 2,
            'price' => 500,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 5,
            'ticket_id' => 2,
            'quota' => 3,
            'price' => 300,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 5,
            'ticket_id' => 3,
            'quota' => 5,
            'price' => 200,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 6,
            'ticket_id' => 1,
            'quota' => 2,
            'price' => 500,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 6,
            'ticket_id' => 2,
            'quota' => 3,
            'price' => 300,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 6,
            'ticket_id' => 3,
            'quota' => 5,
            'price' => 200,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 7,
            'ticket_id' => 1,
            'quota' => 2,
            'price' => 500,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 7,
            'ticket_id' => 2,
            'quota' => 3,
            'price' => 300,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 7,
            'ticket_id' => 3,
            'quota' => 5,
            'price' => 200,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 8,
            'ticket_id' => 1,
            'quota' => 2,
            'price' => 500,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 8,
            'ticket_id' => 2,
            'quota' => 3,
            'price' => 300,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 8,
            'ticket_id' => 3,
            'quota' => 5,
            'price' => 200,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 9,
            'ticket_id' => 1,
            'quota' => 2,
            'price' => 500,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 9,
            'ticket_id' => 2,
            'quota' => 3,
            'price' => 300,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 9,
            'ticket_id' => 3,
            'quota' => 5,
            'price' => 200,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 10,
            'ticket_id' => 1,
            'quota' => 2,
            'price' => 500,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 10,
            'ticket_id' => 2,
            'quota' => 3,
            'price' => 300,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 10,
            'ticket_id' => 3,
            'quota' => 5,
            'price' => 200,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 11,
            'ticket_id' => 1,
            'quota' => 2,
            'price' => 500,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 11,
            'ticket_id' => 2,
            'quota' => 3,
            'price' => 300,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 11,
            'ticket_id' => 3,
            'quota' => 5,
            'price' => 200,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 12,
            'ticket_id' => 1,
            'quota' => 2,
            'price' => 500,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 12,
            'ticket_id' => 2,
            'quota' => 3,
            'price' => 300,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 12,
            'ticket_id' => 3,
            'quota' => 5,
            'price' => 200,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 13,
            'ticket_id' => 1,
            'quota' => 2,
            'price' => 500,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 13,
            'ticket_id' => 2,
            'quota' => 3,
            'price' => 300,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 13,
            'ticket_id' => 3,
            'quota' => 5,
            'price' => 200,
            'created_at' => now(),
            'updated_at' => now(),
        ]); 

        DB::table('tickets_details')->insert([
            'package_id' => 14,
            'ticket_id' => 1,
            'quota' => 2,
            'price' => 500,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 14,
            'ticket_id' => 2,
            'quota' => 3,
            'price' => 300,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 14,
            'ticket_id' => 3,
            'quota' => 5,
            'price' => 200,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 15,
            'ticket_id' => 1,
            'quota' => 2,
            'price' => 500,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 15,
            'ticket_id' => 2,
            'quota' => 3,
            'price' => 300,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 15,
            'ticket_id' => 3,
            'quota' => 5,
            'price' => 200,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 16,
            'ticket_id' => 1,
            'quota' => 2,
            'price' => 500,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 16,
            'ticket_id' => 2,
            'quota' => 3,
            'price' => 300,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 16,
            'ticket_id' => 3,
            'quota' => 5,
            'price' => 200,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // figure skating
        DB::table('tickets_details')->insert([
            'package_id' => 17,
            'ticket_id' => 1,
            'quota' => 2,
            'price' => 600,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 17,
            'ticket_id' => 2,
            'quota' => 3,
            'price' => 450,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 17,
            'ticket_id' => 3,
            'quota' => 5,
            'price' => 300,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 18,
            'ticket_id' => 1,
            'quota' => 2,
            'price' => 600,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 18,
            'ticket_id' => 2,
            'quota' => 3,
            'price' => 450,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 18,
            'ticket_id' => 3,
            'quota' => 5,
            'price' => 300,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 19,
            'ticket_id' => 1,
            'quota' => 2,
            'price' => 600,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 19,
            'ticket_id' => 2,
            'quota' => 3,
            'price' => 450,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 19,
            'ticket_id' => 3,
            'quota' => 5,
            'price' => 300,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 20,
            'ticket_id' => 1,
            'quota' => 2,
            'price' => 600,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 20,
            'ticket_id' => 2,
            'quota' => 3,
            'price' => 450,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 20,
            'ticket_id' => 3,
            'quota' => 5,
            'price' => 300,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 21,
            'ticket_id' => 1,
            'quota' => 2,
            'price' => 600,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 21,
            'ticket_id' => 2,
            'quota' => 3,
            'price' => 450,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 21,
            'ticket_id' => 3,
            'quota' => 5,
            'price' => 300,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 22,
            'ticket_id' => 1,
            'quota' => 2,
            'price' => 600,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 22,
            'ticket_id' => 2,
            'quota' => 3,
            'price' => 450,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 22,
            'ticket_id' => 3,
            'quota' => 5,
            'price' => 300,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 23,
            'ticket_id' => 1,
            'quota' => 2,
            'price' => 600,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 23,
            'ticket_id' => 2,
            'quota' => 3,
            'price' => 450,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 23,
            'ticket_id' => 3,
            'quota' => 5,
            'price' => 300,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 24,
            'ticket_id' => 1,
            'quota' => 2,
            'price' => 600,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 24,
            'ticket_id' => 2,
            'quota' => 3,
            'price' => 450,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 24,
            'ticket_id' => 3,
            'quota' => 5,
            'price' => 300,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 25,
            'ticket_id' => 1,
            'quota' => 2,
            'price' => 600,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 25,
            'ticket_id' => 2,
            'quota' => 3,
            'price' => 450,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 25,
            'ticket_id' => 3,
            'quota' => 5,
            'price' => 300,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 26,
            'ticket_id' => 1,
            'quota' => 2,
            'price' => 600,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 26,
            'ticket_id' => 2,
            'quota' => 3,
            'price' => 450,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 26,
            'ticket_id' => 3,
            'quota' => 5,
            'price' => 300,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 27,
            'ticket_id' => 1,
            'quota' => 2,
            'price' => 600,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 27,
            'ticket_id' => 2,
            'quota' => 3,
            'price' => 450,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 27,
            'ticket_id' => 3,
            'quota' => 5,
            'price' => 300,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 28,
            'ticket_id' => 1,
            'quota' => 2,
            'price' => 600,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 28,
            'ticket_id' => 2,
            'quota' => 3,
            'price' => 450,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 28,
            'ticket_id' => 3,
            'quota' => 5,
            'price' => 300,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 29,
            'ticket_id' => 1,
            'quota' => 2,
            'price' => 600,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 29,
            'ticket_id' => 2,
            'quota' => 3,
            'price' => 450,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 29,
            'ticket_id' => 3,
            'quota' => 5,
            'price' => 300,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 30,
            'ticket_id' => 1,
            'quota' => 2,
            'price' => 600,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 30,
            'ticket_id' => 2,
            'quota' => 3,
            'price' => 450,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 30,
            'ticket_id' => 3,
            'quota' => 5,
            'price' => 300,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 31,
            'ticket_id' => 1,
            'quota' => 2,
            'price' => 600,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 31,
            'ticket_id' => 2,
            'quota' => 3,
            'price' => 450,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 31,
            'ticket_id' => 3,
            'quota' => 5,
            'price' => 300,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 32,
            'ticket_id' => 1,
            'quota' => 2,
            'price' => 600,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 32,
            'ticket_id' => 2,
            'quota' => 3,
            'price' => 450,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tickets_details')->insert([
            'package_id' => 32,
            'ticket_id' => 3,
            'quota' => 5,
            'price' => 300,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
