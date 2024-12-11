<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dateArray = ['15-06-2024', '15-01-2025', '20-02-2025', '15-02-2026'];
        $mysqlArrayDate = [];

        foreach ($dateArray as $date) {
            $carbonDate = Carbon::createFromFormat('d-m-Y', $date);
            array_push($mysqlArrayDate, $carbonDate->format('Y-m-d'));
        }

        DB::table('schedules')->insert([
            'name' => 'Registration for the draw',
            'date' => $mysqlArrayDate[0],
            'description' => 'Sign up, without obligation to purchase, for the draw to access the first phase of sales. Don\'t see the prices yet? That\'s normal: they will be announced simultaneously worldwide next autumn after the Paris 2024 Games.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('schedules')->insert([
            'name' => 'Last chance to enter the draw',
            'date' => $mysqlArrayDate[1],
            'description' => 'In January, registrations close for the draw that determines the priority with which you will be able to access the ticket sales. The Olympic dream becomes more and more real.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('schedules')->insert([
            'name' => 'Buy your Olympics tickets!',
            'date' => $mysqlArrayDate[2],
            'description' => 'Ticket sales for the Olympic Winter Games have officially begun! Purchase based on the round you were assigned by the lottery. See you in the stands!',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('schedules')->insert([
            'name' => 'Olympic and Paralympic Games start!',
            'date' => $mysqlArrayDate[3],
            'description' => 'The 2026 Milan Cortina Winter Olympic and Paralympic Games are starting! An extraordinary event that embraces the whole of Italy. Will you be there?',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
