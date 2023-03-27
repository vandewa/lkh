<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ComCode;
use Illuminate\Support\Facades\DB;

class ComCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() : void
    {
        DB::table('com_codes')->truncate();
        $data = [
            ['code_cd' => 'TEMA_01', 'code_nm' => 'bg-theme bg-theme2', 'code_group' => 'TEMA', 'code_value' => ''],
            ['code_cd' => 'JABATAN_TP_01', 'code_nm' => 'TRC', 'code_group' => 'JABATAN_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_TP_02', 'code_nm' => 'TRC DAMKAR', 'code_group' => 'JABATAN_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_TP_03', 'code_nm' => 'ADMIN', 'code_group' => 'JABATAN_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_TP_04', 'code_nm' => 'PUSDALOPS', 'code_group' => 'JABATAN_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_TP_05', 'code_nm' => 'AGENDARIS', 'code_group' => 'JABATAN_TP', 'code_value' => ''],
            ['code_cd' => 'OPD_TP_01', 'code_nm' => 'BPBD', 'code_group' => 'OPD_TP', 'code_value' => ''],
            ['code_cd' => 'TEMPAT_LAHIR_TP_01', 'code_nm' => 'WONOSOBO', 'code_group' => 'TEMPAT_LAHIR_TP', 'code_value' => ''],
            ['code_cd' => 'TEMPAT_LAHIR_TP_02', 'code_nm' => 'TEMANGGUNG', 'code_group' => 'TEMPAT_LAHIR_TP', 'code_value' => ''],
            ['code_cd' => 'TEMPAT_LAHIR_TP_03', 'code_nm' => 'SEMARANG', 'code_group' => 'TEMPAT_LAHIR_TP', 'code_value' => ''],
            ['code_cd' => 'TEMPAT_LAHIR_TP_04', 'code_nm' => 'TEGAL', 'code_group' => 'TEMPAT_LAHIR_TP', 'code_value' => ''],
            ['code_cd' => 'TEMPAT_LAHIR_TP_05', 'code_nm' => 'KULON PROGO', 'code_group' => 'TEMPAT_LAHIR_TP', 'code_value' => ''],
        ];

        foreach ($data as $datum) {
            ComCode::create($datum);
        }
    }
}
