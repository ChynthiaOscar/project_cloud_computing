<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $date = '15-06-2004';
        $carbonDate = Carbon::createFromFormat('d-m-Y', $date);
        $mysqlDate = $carbonDate->format('Y-m-d');

        DB::table("accounts")->insert([
            "name" => 'Richard',
            'email'=> 'richard@gmail.com',
            'password'=> bcrypt('12345'),
            'first_name' => "Richard",
            'surname' => "Adi",
            "date_of_birth" => $mysqlDate,
            "country_of_residence" => 'Indonesia',
            'postcode' => '93232',
        ]);
    }
}
