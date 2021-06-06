<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('time')->delete();
        DB::table('time')->insert([
            ['time_schedule' => '6h-8h'],
            ['time_schedule' => '8h-10h'],
            ['time_schedule' => '13h-15h'],
            ['time_schedule' => '15h-17h'],
        ]);

    }
}
