<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call(ItemCategorySeeder::class);
        $this->call(TrxTypeSeeder::class);
        $this->call(StockSeeder::class);
        $this->call(TrxSeeder::class);
        $this->call(LayawaySeeder::class);
    }
}
