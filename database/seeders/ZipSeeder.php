<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('zip_codes')->insert([
            'd_codigo' => '111',
            'd_asenta' => '111', 
            'd_tipo_asenta' => '111', 
            'D_mnpio' => '111',
            'd_estado' => '111',
            'd_ciudad' => '111',
            'd_CP' => '111',
            'c_estado' => '111',
            'c_CP' => '111',
            'c_tipo_asenta' => '111',
            'c_mnpio' => '111',
            'id_asenta_cpcons' => '111',
            'd_zona' => '111',
            'c_cve_ciudad'=> '111'
        ]);
    }
}
