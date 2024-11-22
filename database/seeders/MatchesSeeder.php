<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MatchesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // football matches
        DB::table('matches')->insert([
            'sports' => 'Football',
            'nationalities' => 'England',
            'date' => '2024-11-21 15:30:15',
        ]);

        DB::table('matches')->insert([
            'sports' => 'Football',
            'nationalities' => 'Japan',
            'date' => '2024-11-27 20:40:15',
        ]);

        DB::table('matches')->insert([
            'sports' => 'Football',
            'nationalities' => 'Brazil',
            'date' => '2024-11-22 12:00:15',
        ]);

        // badminton matches
        DB::table('matches')->insert([
            'sports' => 'Badminton',
            'nationalities' => 'Malaysia',
            'date' => '2024-11-23 15:30:15',
        ]);

        DB::table('matches')->insert([
            'sports' => 'Badminton',
            'nationalities' => 'Thailand',
            'date' => '2024-11-30 20:40:15',
        ]);

        DB::table('matches')->insert([
            'sports' => 'Badminton',
            'nationalities' => 'Indonesia',
            'date' => '2024-11-10 12:00:15',
        ]);
    }
}
