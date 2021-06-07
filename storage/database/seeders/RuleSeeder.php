<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rule_user')->delete();
        DB::table('rule_user')->insert([
            ['name' =>'Người dùng'],
            ['name' =>'Quản trị viên'],
            ['name' =>'Lễ tân'],
        ]);
    }
}
