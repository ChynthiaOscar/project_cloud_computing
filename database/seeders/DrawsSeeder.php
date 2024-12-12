<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DrawsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $draws = [
            1 => [
                ['account_id' => 1, 'package_id' => 1],
                ['account_id' => 2, 'package_id' => 1],
                ['account_id' => 5, 'package_id' => 1],
            ],
            2 => [
                ['account_id' => 3, 'package_id' => 2],
                ['account_id' => 2, 'package_id' => 2],
            ],
            3 => [
                ['account_id' => 4, 'package_id' => 3],
                ['account_id' => 1, 'package_id' => 3],
                ['account_id' => 5, 'package_id' => 3],
            ],
        ];

        foreach ($draws as $accounts) {
            foreach ($accounts as $draw) {
                DB::table('draws')->insert([
                    'account_id' => $draw['account_id'],
                    'package_id' => $draw['package_id'],
                    'status' => 0, // Default status
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
