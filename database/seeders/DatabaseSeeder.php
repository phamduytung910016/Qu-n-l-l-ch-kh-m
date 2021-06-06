<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UserSeeder::class);
         $this->call(RuleSeeder::class);
         $this->call(ServiceTableSeeder::class);
        $this->call(TimeSeeder::class);
    }
}
