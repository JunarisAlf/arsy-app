<?php

namespace Database\Seeders;

use App\Models\Layaway;
use App\Models\LayawayDetail;
use DateInterval;
use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LayawaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::transaction(function () {
            $layaway = Layaway::create([
                'customer_name' => 'Customer A',
                'customer_wa' => '082211113333',
                'tenor' => 24,
                'project' => 'Dmashome',
                'block' => 'D3',
                'price' => 950_000_000,
                'note' => '-',
            ]);
            $jatuh_tempo = new DateTime('2023-01-20');
            for ($i=1; $i <= 24 ; $i++) { 
                $detail = new LayawayDetail([
                    'month' => $i,
                    'jatuh_tempo' => $jatuh_tempo ,
                ]);
                $layaway->details()->save($detail);
                $jatuh_tempo->add(new DateInterval('P30D'));
            } $jatuh_tempo->add(new DateInterval('P30D'));
        });
        DB::transaction(function () {
            $layaway = Layaway::create([
                'customer_name' => 'Customer B',
                'customer_wa' => '0822444455555',
                'tenor' => 12,
                'project' => 'Abinaya',
                'block' => 'C4',
                'price' => 750_000_000,
                'note' => '-',
            ]);
            $jatuh_tempo = new DateTime();
            for ($i=1; $i <= 12 ; $i++) { 
                $detail = new LayawayDetail([
                    'month' => $i,
                    'jatuh_tempo' => $jatuh_tempo ,
                ]);
                $layaway->details()->save($detail);
                $jatuh_tempo->add(new DateInterval('P30D'));
            }
        });
    }
}
