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
        // ice hockey womens
        DB::table('matches')->insert([
            'sports' => 'Ice Hockey',
            'home' => 'Norway (NOR)',
            'away' => 'Germany (GER)',
            'start_time' => '2026-02-07 08:00:00',
            'end_time' => '2026-02-07 12:00:00',
            'type' => 'Women',
            'stages' => 'Group Stage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('matches')->insert([
            'sports' => 'Ice Hockey',
            'home' => 'China (CHN)',
            'away' => 'United States of America (USA)',
            'start_time' => '2026-02-07 14:00:00',
            'end_time' => '2026-02-07 18:00:00',
            'type' => 'Women',
            'stages' => 'Group Stage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('matches')->insert([
            'sports' => 'Ice Hockey',
            'home' => 'France (FRA)',
            'away' => 'Canada (CAN)',
            'start_time' => '2026-02-08 08:00:00',
            'end_time' => '2026-02-08 12:00:00',
            'type' => 'Women',
            'stages' => 'Group Stage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('matches')->insert([
            'sports' => 'Ice Hockey',
            'home' => 'Japan (JPN)',
            'away' => 'Italy (ITA)',
            'start_time' => '2026-02-08 14:00:00',
            'end_time' => '2026-02-08 18:00:00',
            'type' => 'Women',
            'stages' => 'Group Stage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('matches')->insert([
            'sports' => 'Ice Hockey',
            'home' => 'Norway (NOR)',
            'away' => 'China (CHN)',
            'start_time' => '2026-02-09 08:00:00',
            'end_time' => '2026-02-09 12:00:00',
            'type' => 'Women',
            'stages' => 'Group Stage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('matches')->insert([
            'sports' => 'Ice Hockey',
            'home' => 'Germany (GER)',
            'away' => 'United States of America (USA)',
            'start_time' => '2026-02-09 14:00:00',
            'end_time' => '2026-02-09 18:00:00',
            'type' => 'Women',
            'stages' => 'Group Stage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('matches')->insert([
            'sports' => 'Ice Hockey',
            'home' => 'France (FRA)',
            'away' => 'Japan (JPN)',
            'start_time' => '2026-02-10 08:00:00',
            'end_time' => '2026-02-10 12:00:00',
            'type' => 'Women',
            'stages' => 'Group Stage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('matches')->insert([
            'sports' => 'Ice Hockey',
            'home' => 'Canada (CAN)',
            'away' => 'Italy (ITA)',
            'start_time' => '2026-02-10 14:00:00',
            'end_time' => '2026-02-10 18:00:00',
            'type' => 'Women',
            'stages' => 'Group Stage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('matches')->insert([
            'sports' => 'Ice Hockey',
            'home' => 'Norway (NOR)',
            'away' => 'United States of America (USA)',
            'start_time' => '2026-02-11 08:00:00',
            'end_time' => '2026-02-11 12:00:00',
            'type' => 'Women',
            'stages' => 'Group Stage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('matches')->insert([
            'sports' => 'Ice Hockey',
            'home' => 'Germany (GER)',
            'away' => 'China (CHN)',
            'start_time' => '2026-02-11 14:00:00',
            'end_time' => '2026-02-11 18:00:00',
            'type' => 'Women',
            'stages' => 'Group Stage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('matches')->insert([
            'sports' => 'Ice Hockey',
            'home' => 'France (FRA)',
            'away' => 'Italy (ITA)',
            'start_time' => '2026-02-12 08:00:00',
            'end_time' => '2026-02-12 12:00:00',
            'type' => 'Women',
            'stages' => 'Group Stage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('matches')->insert([
            'sports' => 'Ice Hockey',
            'home' => 'Canada (CAN)',
            'away' => 'Japan (JPN)',
            'start_time' => '2026-02-12 14:00:00',
            'end_time' => '2026-02-12 18:00:00',
            'type' => 'Women',
            'stages' => 'Group Stage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('matches')->insert([
            'sports' => 'Ice Hockey',
            'start_time' => '2026-02-13 08:00:00',
            'end_time' => '2026-02-13 12:00:00',
            'type' => 'Women',
            'stages' => 'Semi Finals',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('matches')->insert([
            'sports' => 'Ice Hockey',
            'start_time' => '2026-02-13 14:00:00',
            'end_time' => '2026-02-13 18:00:00',
            'type' => 'Women',
            'stages' => 'Semi Finals',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('matches')->insert([
            'sports' => 'Ice Hockey',
            'start_time' => '2026-02-15 08:00:00',
            'end_time' => '2026-02-15 12:00:00',
            'type' => 'Women',
            'stages' => 'Finals',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('matches')->insert([
            'sports' => 'Ice Hockey',
            'start_time' => '2026-02-15 14:00:00',
            'end_time' => '2026-02-15 18:00:00',
            'type' => 'Women',
            'stages' => 'Finals',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // ice hockey mens
        DB::table('matches')->insert([
            'sports' => 'Ice Hockey',
            'home' => 'Norway (NOR)',
            'away' => 'Germany (GER)',
            'start_time' => '2026-02-16 08:00:00',
            'end_time' => '2026-02-16 12:00:00',
            'type' => 'Men',
            'stages' => 'Group Stage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('matches')->insert([
            'sports' => 'Ice Hockey',
            'home' => 'China (CHN)',
            'away' => 'United States of America (USA)',
            'start_time' => '2026-02-16 14:00:00',
            'end_time' => '2026-02-16 18:00:00',
            'type' => 'Men',
            'stages' => 'Group Stage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('matches')->insert([
            'sports' => 'Ice Hockey',
            'home' => 'France (FRA)',
            'away' => 'Canada (CAN)',
            'start_time' => '2026-02-17 08:00:00',
            'end_time' => '2026-02-17 12:00:00',
            'type' => 'Men',
            'stages' => 'Group Stage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('matches')->insert([
            'sports' => 'Ice Hockey',
            'home' => 'Japan (JPN)',
            'away' => 'Italy (ITA)',
            'start_time' => '2026-02-17 14:00:00',
            'end_time' => '2026-02-17 18:00:00',
            'type' => 'Men',
            'stages' => 'Group Stage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('matches')->insert([
            'sports' => 'Ice Hockey',
            'home' => 'Norway (NOR)',
            'away' => 'China (CHN)',
            'start_time' => '2026-02-18 08:00:00',
            'end_time' => '2026-02-18 12:00:00',
            'type' => 'Men',
            'stages' => 'Group Stage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('matches')->insert([
            'sports' => 'Ice Hockey',
            'home' => 'Germany (GER)',
            'away' => 'United States of America (USA)',
            'start_time' => '2026-02-18 14:00:00',
            'end_time' => '2026-02-18 18:00:00',
            'type' => 'Men',
            'stages' => 'Group Stage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('matches')->insert([
            'sports' => 'Ice Hockey',
            'home' => 'France (FRA)',
            'away' => 'Japan (JPN)',
            'start_time' => '2026-02-19 08:00:00',
            'end_time' => '2026-02-19 12:00:00',
            'type' => 'Men',
            'stages' => 'Group Stage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('matches')->insert([
            'sports' => 'Ice Hockey',
            'home' => 'Canada (CAN)',
            'away' => 'Italy (ITA)',
            'start_time' => '2026-02-19 14:00:00',
            'end_time' => '2026-02-19 18:00:00',
            'type' => 'Men',
            'stages' => 'Group Stage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('matches')->insert([
            'sports' => 'Ice Hockey',
            'home' => 'Norway (NOR)',
            'away' => 'United States of America (USA)',
            'start_time' => '2026-02-20 08:00:00',
            'end_time' => '2026-02-20 12:00:00',
            'type' => 'Men',
            'stages' => 'Group Stage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('matches')->insert([
            'sports' => 'Ice Hockey',
            'home' => 'Germany (GER)',
            'away' => 'China (CHN)',
            'start_time' => '2026-02-20 14:00:00',
            'end_time' => '2026-02-20 18:00:00',
            'type' => 'Men',
            'stages' => 'Group Stage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('matches')->insert([
            'sports' => 'Ice Hockey',
            'home' => 'France (FRA)',
            'away' => 'Italy (ITA)',
            'start_time' => '2026-02-21 08:00:00',
            'end_time' => '2026-02-21 12:00:00',
            'type' => 'Men',
            'stages' => 'Group Stage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('matches')->insert([
            'sports' => 'Ice Hockey',
            'home' => 'Canada (CAN)',
            'away' => 'Japan (JPN)',
            'start_time' => '2026-02-21 14:00:00',
            'end_time' => '2026-02-21 18:00:00',
            'type' => 'Men',
            'stages' => 'Group Stage',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('matches')->insert([
            'sports' => 'Ice Hockey',
            'start_time' => '2026-02-22 08:00:00',
            'end_time' => '2026-02-22 12:00:00',
            'type' => 'Men',
            'stages' => 'Semi Finals',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('matches')->insert([
            'sports' => 'Ice Hockey',
            'start_time' => '2026-02-22 14:00:00',
            'end_time' => '2026-02-22 18:00:00',
            'type' => 'Men',
            'stages' => 'Semi Finals',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('matches')->insert([
            'sports' => 'Ice Hockey',
            'start_time' => '2026-02-24 08:00:00',
            'end_time' => '2026-02-24 12:00:00',
            'type' => 'Men',
            'stages' => 'Finals',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('matches')->insert([
            'sports' => 'Ice Hockey',
            'start_time' => '2026-02-24 14:00:00',
            'end_time' => '2026-02-24 18:00:00',
            'type' => 'Men',
            'stages' => 'Finals',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // figure skating womens
        DB::table('matches')->insert([
            'sports' => 'Ice Hockey',
            'home' => 'Norway (NOR)',
            'start_time' => '2026-02-14 13:00:00',
            'end_time' => '2026-02-14 18:00:00',
            'type' => 'Women',
            'stages' => 'Finals',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('matches')->insert([
            'sports' => 'Ice Hockey',
            'home' => 'Germany (GER)',
            'start_time' => '2026-02-14 13:00:00',
            'end_time' => '2026-02-14 18:00:00',
            'type' => 'Women',
            'stages' => 'Finals',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('matches')->insert([
            'sports' => 'Ice Hockey',
            'home' => 'China (CHN)',
            'start_time' => '2026-02-14 13:00:00',
            'end_time' => '2026-02-14 18:00:00',
            'type' => 'Women',
            'stages' => 'Finals',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('matches')->insert([
            'sports' => 'Ice Hockey',
            'home' => 'United States of America (USA)',
            'start_time' => '2026-02-14 13:00:00',
            'end_time' => '2026-02-14 18:00:00',
            'type' => 'Women',
            'stages' => 'Finals',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('matches')->insert([
            'sports' => 'Ice Hockey',
            'home' => 'France (FRA)',
            'start_time' => '2026-02-14 13:00:00',
            'end_time' => '2026-02-14 18:00:00',
            'type' => 'Women',
            'stages' => 'Finals',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('matches')->insert([
            'sports' => 'Ice Hockey',
            'home' => 'Canada (CAN)',
            'start_time' => '2026-02-14 13:00:00',
            'end_time' => '2026-02-14 18:00:00',
            'type' => 'Women',
            'stages' => 'Finals',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('matches')->insert([
            'sports' => 'Ice Hockey',
            'home' => 'Japan (JPN)',
            'start_time' => '2026-02-14 13:00:00',
            'end_time' => '2026-02-14 18:00:00',
            'type' => 'Women',
            'stages' => 'Finals',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('matches')->insert([
            'sports' => 'Ice Hockey',
            'home' => 'Italy (ITA)',
            'start_time' => '2026-02-14 13:00:00',
            'end_time' => '2026-02-14 18:00:00',
            'type' => 'Women',
            'stages' => 'Finals',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // figure skating mens
        DB::table('matches')->insert([
            'sports' => 'Ice Hockey',
            'home' => 'Norway (NOR)',
            'start_time' => '2026-02-23 13:00:00',
            'end_time' => '2026-02-23 18:00:00',
            'type' => 'Women',
            'stages' => 'Finals',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('matches')->insert([
            'sports' => 'Ice Hockey',
            'home' => 'Germany (GER)',
            'start_time' => '2026-02-23 13:00:00',
            'end_time' => '2026-02-23 18:00:00',
            'type' => 'Women',
            'stages' => 'Finals',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('matches')->insert([
            'sports' => 'Ice Hockey',
            'home' => 'China (CHN)',
            'start_time' => '2026-02-23 13:00:00',
            'end_time' => '2026-02-23 18:00:00',
            'type' => 'Women',
            'stages' => 'Finals',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('matches')->insert([
            'sports' => 'Ice Hockey',
            'home' => 'United States of America (USA)',
            'start_time' => '2026-02-23 13:00:00',
            'end_time' => '2026-02-23 18:00:00',
            'type' => 'Women',
            'stages' => 'Finals',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('matches')->insert([
            'sports' => 'Ice Hockey',
            'home' => 'France (FRA)',
            'start_time' => '2026-02-23 13:00:00',
            'end_time' => '2026-02-23 18:00:00',
            'type' => 'Women',
            'stages' => 'Finals',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('matches')->insert([
            'sports' => 'Ice Hockey',
            'home' => 'Canada (CAN)',
            'start_time' => '2026-02-23 13:00:00',
            'end_time' => '2026-02-23 18:00:00',
            'type' => 'Women',
            'stages' => 'Finals',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('matches')->insert([
            'sports' => 'Ice Hockey',
            'home' => 'Japan (JPN)',
            'start_time' => '2026-02-23 13:00:00',
            'end_time' => '2026-02-23 18:00:00',
            'type' => 'Women',
            'stages' => 'Finals',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('matches')->insert([
            'sports' => 'Ice Hockey',
            'home' => 'Italy (ITA)',
            'start_time' => '2026-02-23 13:00:00',
            'end_time' => '2026-02-23 18:00:00',
            'type' => 'Women',
            'stages' => 'Finals',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
