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
            'final_price' => 1_600_000 ,
            'status' => 'cash',
            'created_at' => Carbon::now()->subDay(10)->format('Y-m-d H:i:s')
            // 'saldo' => 10_000_000
        ]);
        Transaction::create([
            'type_id' => 8,
            'name' => 'Pembelian Cat',
            'quantity' =>  5,
            'unit' => 'kaleng',
            'price' => 50000,
            'final_price' => 250_000 ,
            'status' => 'cash',
            'created_at' => Carbon::now()->subDay(7)->format('Y-m-d H:i:s')

            // 'saldo' => 9_750_000
            
        ]);
        Transaction::create([
            'type_id' => 8,
            'name' => 'Pembelian Paku',
            'quantity' =>  3,
            'unit' => 'kg',
            'price' => 20000,
            'final_price' => 60_000 ,
            'status' => 'cash',
            'created_at' => Carbon::now()->subDay(6)->format('Y-m-d H:i:s')

            // 'saldo' => 9_690_000
        ]);
    }
}
