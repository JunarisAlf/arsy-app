<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stocks')->insert([
            [
                'category_id' => 1,
                'name' => 'Semen',
                'quantity' => 0,
                'unit' => 'sak',
                'note' => '-'
            ],
            [
                'category_id' => 2,
                'name' => 'Batu-Bata',
                'quantity' => 0,
                'unit' => 'pickup',
                'note' => ''
            ],
            [
                'category_id' => 3,
                'name' => 'Kertas',
                'quantity' => 0,
                'unit' => 'rim',
                'note' => ''
            ],
            ]);
    }
}
