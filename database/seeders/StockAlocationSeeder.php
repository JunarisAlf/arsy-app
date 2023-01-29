<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StockAlocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stock_histories')->insert([
            [
                'stock_id' => 1,
                'alocate_to' => 'gudang',
                'action' => 'in',
                'quantity' => 20,
                'note' => 'pembelian'
            ],
            [
                'stock_id' => 1,
                'alocate_to' => 'abinaya',
                'action' => 'out',
                'quantity' => 10,
                'note' => ''
            ],
        ]);
    }
}
