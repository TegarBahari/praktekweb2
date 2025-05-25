<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MajorsSeeder extends Seeder
{
    public function run()
    {
        DB::table('majors')->insert([
            [
                'code' => 'TI',
                'name' => 'S1 Teknik Informatika',
                'description' => 'Program studi Teknik Informatika',
            ],
            [
                'code' => 'SI',
                'name' => 'S1 Sistem Informasi',
                'description' => 'Program studi Sistem Informasi',
            ],
        ]);
    }
}