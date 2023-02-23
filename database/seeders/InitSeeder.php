<?php

namespace Database\Seeders;

use App\Models\Layaway;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        // for kas
        

        // Read the JSON file 
        // $raw = file_get_contents('database\seeders\kas_kecil.json');
        $raw = file_get_contents('kas_kecil.json', FILE_USE_INCLUDE_PATH);

        // Decode the JSON file
        $kas_kecil = json_decode($raw ,true);
        foreach ($kas_kecil as $kas) {
            $date = Carbon::createFromFormat('d/m/Y', $kas['date'])->setTime(00, 00, 00)->format('Y-m-d H:i:s');
            if ($kas['type'] == 'KREDIT'){
                DB::table('transcations')->insert([
                    'type_id' => 1,
                    'name' => $kas['keterangan'],
                    'quantity' =>  1,
                    'unit' => 'x',
                    'price' => 0,
                    'final_price' => $kas['amount'] ,
                    'status' => 'cash',
                    'note' => 'Pembukuan Awal',
                    'created_at' => $date,
                    'updated_at' => $date,
                ]);
            }else if($kas['type'] == 'DEBIT'){
                DB::table('kas')->insert([
                    'jumlah' => $kas['amount'],
                    'note' => $kas['keterangan'],
                    'created_at' => $date,
                    'updated_at' => $date,
                ]);
            }

            
            
            
        }
    }
}
