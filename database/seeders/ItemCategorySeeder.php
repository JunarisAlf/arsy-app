<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('items_categories')->insert([
            [
                'name' => 'Material Bangunan',
                'note' => '-',
            ],
            [
                'name' => 'ATK',
                'note' => '-',
            ],
            [
                'name' => 'Konsumsi',
                'note' => '-',
            ],
            [
                'name' => 'Perkakas',
                'note' => '-',
            ],
            [
                'name' => 'Alat Elektronik',
                'note' => '-',
            ],
        ]);

    }
}
