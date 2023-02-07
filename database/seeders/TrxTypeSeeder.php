<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrxTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trx_types')->insert([
            [
                'name' => 'Pembelian Material',
                'cash_flow' => 'out'
            ],
            [
                'name' => 'Pembayaran Jasa',
                'cash_flow' => 'out'
            ],
            [
                'name' => 'Pembelian Keperluan Kantor',
                'cash_flow' => 'out'
            ],
            [
                'name' => 'Pembelian Keperluan Konsumsi',
                'cash_flow' => 'out'
            ],
            [
                'name' => 'Pembayaran Sewa',
                'cash_flow' => 'out'
            ],
            [
                'name' => 'DP Penjualan Rumah',
                'cash_flow' => 'IN'
            ],
            [
                'name' => 'Angsuran Penjualan Rumah',
                'cash_flow' => 'IN'
            ],
            [
                'name' => 'Pelunasan',
                'cash_flow' => 'IN'
            ],
        ]);
    }
}
