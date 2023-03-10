<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('users')->insert([
            'full_name' => 'superadmin_dev',
            'username' => 'superadmin_dev',
            'role' => 'superadmin',
            'password' => Hash::make('superadmin_dev'),
        ]);
        DB::table('users')->insert([
            'full_name' => 'superadmin_dev',
            'username' => 'admin_dev',
            'role' => 'admin',
            'password' => Hash::make('superadmin_dev'),
        ]);

        DB::table('users')->insert([
            'full_name' => 'superadmin',
            'username' => 'superadmin',
            'role' => 'superadmin',
            'password' => Hash::make('superadmin'),
        ]);
        DB::table('users')->insert([
            'full_name' => 'admin',
            'username' => 'admin',
            'role' => 'admin',
            'password' => Hash::make('admin'),
        ]);
    }
}
