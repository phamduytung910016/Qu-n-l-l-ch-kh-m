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
            ['time_schedule' => '8h-9h'],
            ['time_schedule' => '9h-10h'],
            ['time_schedule' => '10h-11h'],
            ['time_schedule' => '11h-12h'],
            ['time_schedule' => '13h-14h'],
            ['time_schedule' => '14h-15h'],
            ['time_schedule' => '15h-16h'],
            ['time_schedule' => '16h-17h'],
        ]);

    }
}
