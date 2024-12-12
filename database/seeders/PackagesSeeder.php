<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("packages")->insert([
            "nationality" => 'Indonesia',
            "created_at" => now(),
            "updated_at"=> now(),
        ]);
        DB::table("packages")->insert([
            "nationality" => 'USA',
            "created_at" => now(),
            "updated_at"=> now(),
        ]);
        DB::table("packages")->insert([
            "nationality" => 'China',
            "created_at" => now(),
            "updated_at"=> now(),
        ]);
    }
}
