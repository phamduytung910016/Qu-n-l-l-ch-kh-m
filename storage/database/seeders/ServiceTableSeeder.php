<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('servicetable')->delete();
        DB::table('servicetable')->insert([
            ['name' =>'Khám theo yêu cầu'],
            ['name' =>'Khám tai mũi họng'],
            ['name' =>'Khám nội'],
            ['name' =>'Khám khám phụ khoa'],
        ]);
    }
}
