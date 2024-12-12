<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PackagesDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // women norway ice hockey
        DB::table('packages_details')->insert([
            'package_id' => 1,
            'match_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('packages_details')->insert([
            'package_id' => 1,
            'match_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('packages_details')->insert([
            'package_id' => 1,
            'match_id' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // woman germany ice hockey
        DB::table('packages_details')->insert([
            'package_id' => 2,
            'match_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('packages_details')->insert([
            'package_id' => 2,
            'match_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('packages_details')->insert([
            'package_id' => 2,
            'match_id' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // china women ice hockey
        DB::table('packages_details')->insert([
            'package_id' => 3,
            'match_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('packages_details')->insert([
            'package_id' => 3,
            'match_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('packages_details')->insert([
            'package_id' => 3,
            'match_id' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // united states women ice hockey
        DB::table('packages_details')->insert([
            'package_id' => 4,
            'match_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('packages_details')->insert([
            'package_id' => 4,
            'match_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('packages_details')->insert([
            'package_id' => 4,
            'match_id' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // france women ice hockey
        DB::table('packages_details')->insert([
            'package_id' => 5,
            'match_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('packages_details')->insert([
            'package_id' => 5,
            'match_id' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('packages_details')->insert([
            'package_id' => 5,
            'match_id' => 11,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // canada women ice hockey
        DB::table('packages_details')->insert([
            'package_id' => 6,
            'match_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('packages_details')->insert([
            'package_id' => 6,
            'match_id' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('packages_details')->insert([
            'package_id' => 6,
            'match_id' => 12,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // japan women ice hockey
        DB::table('packages_details')->insert([
            'package_id' => 7,
            'match_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('packages_details')->insert([
            'package_id' => 7,
            'match_id' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('packages_details')->insert([
            'package_id' => 7,
            'match_id' => 12,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // italy women ice hockey
        DB::table('packages_details')->insert([
            'package_id' => 8,
            'match_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('packages_details')->insert([
            'package_id' => 8,
            'match_id' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('packages_details')->insert([
            'package_id' => 8,
            'match_id' => 11,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // men norway ice hockey
        DB::table('packages_details')->insert([
            'package_id' => 9,
            'match_id' => 17,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('packages_details')->insert([
            'package_id' => 9,
            'match_id' => 21,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('packages_details')->insert([
            'package_id' => 9,
            'match_id' => 25,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // germany men ice hockey
        DB::table('packages_details')->insert([
            'package_id' => 10,
            'match_id' => 17,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('packages_details')->insert([
            'package_id' => 10,
            'match_id' => 22,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('packages_details')->insert([
            'package_id' => 10,
            'match_id' => 26,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // china men ice hockey
        DB::table('packages_details')->insert([
            'package_id' => 11,
            'match_id' => 18,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('packages_details')->insert([
            'package_id' => 11,
            'match_id' => 21,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('packages_details')->insert([
            'package_id' => 11,
            'match_id' => 26,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // united states men ice hockey
        DB::table('packages_details')->insert([
            'package_id' => 12,
            'match_id' => 18,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('packages_details')->insert([
            'package_id' => 12,
            'match_id' => 22,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('packages_details')->insert([
            'package_id' => 12,
            'match_id' => 25,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // france men ice hockey
        DB::table('packages_details')->insert([
            'package_id' => 13,
            'match_id' => 19,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('packages_details')->insert([
            'package_id' => 13,
            'match_id' => 23,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('packages_details')->insert([
            'package_id' => 13,
            'match_id' => 27,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // canada men ice hockey
        DB::table('packages_details')->insert([
            'package_id' => 14,
            'match_id' => 19,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('packages_details')->insert([
            'package_id' => 14,
            'match_id' => 24,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('packages_details')->insert([
            'package_id' => 14,
            'match_id' => 28,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // japan men ice hockey
        DB::table('packages_details')->insert([
            'package_id' => 15,
            'match_id' => 20,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('packages_details')->insert([
            'package_id' => 15,
            'match_id' => 23,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('packages_details')->insert([
            'package_id' => 15,
            'match_id' => 28,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // italy men ice hockey
        DB::table('packages_details')->insert([
            'package_id' => 16,
            'match_id' => 20,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('packages_details')->insert([
            'package_id' => 16,
            'match_id' => 24,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('packages_details')->insert([
            'package_id' => 16,
            'match_id' => 27,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // women figure skating
        DB::table('packages_details')->insert([
            'package_id' => 17,
            'match_id' => 33,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('packages_details')->insert([
            'package_id' => 18,
            'match_id' => 34,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('packages_details')->insert([
            'package_id' => 19,
            'match_id' => 35,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('packages_details')->insert([
            'package_id' => 20,
            'match_id' => 36,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('packages_details')->insert([
            'package_id' => 21,
            'match_id' => 37,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('packages_details')->insert([
            'package_id' => 22,
            'match_id' => 38,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('packages_details')->insert([
            'package_id' => 23,
            'match_id' => 39,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('packages_details')->insert([
            'package_id' => 24,
            'match_id' => 40,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // men figure skating
        DB::table('packages_details')->insert([
            'package_id' => 25,
            'match_id' => 41,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('packages_details')->insert([
            'package_id' => 26,
            'match_id' => 42,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('packages_details')->insert([
            'package_id' => 27,
            'match_id' => 43,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('packages_details')->insert([
            'package_id' => 28,
            'match_id' => 44,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('packages_details')->insert([
            'package_id' => 29,
            'match_id' => 45,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('packages_details')->insert([
            'package_id' => 30,
            'match_id' => 46,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('packages_details')->insert([
            'package_id' => 31,
            'match_id' => 47,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('packages_details')->insert([
            'package_id' => 32,
            'match_id' => 48,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
