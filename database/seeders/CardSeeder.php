<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $date = '15-06-2064';
        $carbonDate = Carbon::createFromFormat('d-m-Y', $date);
        $mysqlDate = $carbonDate->format('Y-m-d');

        DB::table('cards')->insert([
            'account_id' => 1,
            'name_on_card' => 'Richard',
            'card_number' => '0239382302302',
            'expiration_date'=> '12/2024',
            'cvv'=> '133',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cards')->insert([
            'account_id' => 2,
            'name_on_card' => 'Kevin',
            'card_number' => '0239382302302',
            'expiration_date'=> '12/2024',
            'cvv'=> '133',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cards')->insert([
            'account_id' => 3,
            'name_on_card' => 'Valiant',
            'card_number' => '0239382302302',
            'expiration_date'=> '12/2024',
            'cvv'=> '133',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cards')->insert([
            'account_id' => 4,
            'name_on_card' => 'Chynthia',
            'card_number' => '0239382302302',
            'expiration_date'=> '12/2024',
            'cvv'=> '133',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('cards')->insert([
            'account_id' => 5,
            'name_on_card' => 'Budi',
            'card_number' => '0239382302302',
            'expiration_date'=> '12/2024',
            'cvv'=> '133',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
