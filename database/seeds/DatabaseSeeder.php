<?php

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

         $this->call([CourierSeeder::class, CustomerSeeder::class, OldOrderSeeder::class, OrderSeeder::class]);
    }
}
