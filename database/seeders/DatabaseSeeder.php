<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Card;
use Illuminate\Database\Seeder;
use PHPUnit\Framework\Attributes\Ticket;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            MatchesSeeder::class,
            AccountSeeder::class,
            PackagesSeeder::class,
            DrawsSeeder::class,
            PackagesDetailSeeder::class,
            TicketsDetailSeeder::class,
            TicketsSeeder::class,
            ScheduleSeeder::class,
            CardSeeder::class,
        ]);
    }
}
