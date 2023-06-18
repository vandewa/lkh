<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Atasan;
use Illuminate\Support\Facades\DB;

class AtasanBPBD extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['id' => '3', 'nama' => 'Drs. GANESWARA WIBAWA, M.M.', 'nip' => '196801041992031008', 'jabatan' => 'Kepala Bidang Kedaruratan dan Logistik', 'opd_tp' => 'OPD_TP_01'],
            ['id' => '4', 'nama' => 'MUSAFAK, S.IP.', 'nip' => '196706141989121002', 'jabatan' => 'Kepala Bidang Pemadam Kebakaran dan Penyelamatan', 'opd_tp' => 'OPD_TP_01'],
            ['id' => '5', 'nama' => 'ROBINGAH, S.IP., M.M.', 'nip' => '197002111996032005', 'jabatan' => 'Kepala Bidang Pencegahan, Kesiapsiagaan, Rehabilitasi dan Rekonstruksi', 'opd_tp' => 'OPD_TP_01'],
        ];
        
        foreach ($data as $datum) {
            Atasan::create($datum);
        }
    }
}
