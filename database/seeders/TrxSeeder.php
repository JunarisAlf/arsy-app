<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;

class TrxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transaction::create([
            'type_id' => 8,
            'name' => 'Pembelian semen',
            'quantity' =>  20,
            'unit' => 'sak',
            'price' => 80000,
            'final_price' => 1600000 ,
            'status' => 'cash',
        ]);
        Transaction::create([
            'type_id' => 8,
            'name' => 'Pembelian Cat',
            'quantity' =>  5,
            'unit' => 'kaleng',
            'price' => 50000,
            'final_price' => 250000 ,
            'status' => 'cash',
        ]);
        Transaction::create([
            'type_id' => 8,
            'name' => 'Pembelian Paku',
            'quantity' =>  3,
            'unit' => 'kg',
            'price' => 20000,
            'final_price' => 60000 ,
            'status' => 'cash',
        ]);
    }
}
