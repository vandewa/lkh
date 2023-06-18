<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Atasan;
use Illuminate\Support\Facades\DB;


class AtasanDPUPRSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('atasans')->truncate();

        $data = [
            ['id' => '6', 'nama' => 'BAMBANG SUPRIYANTO, SH', 'nip' => '197105031995031002', 'jabatan' => 'Kepala Sub Bagian Umum dan Kepegawaian DPUPR ', 'opd_tp' => 'OPD_TP_02', 'bidang' => 'SEKRETARIAT'],
            ['id' => '7', 'nama' => 'DIAN WIDIYANTI, ST', 'nip' => '197910282005022002', 'jabatan' => 'Kepala Sub Bagian Keuangan DPUPR ', 'opd_tp' => 'OPD_TP_02', 'bidang' => 'SEKRETARIAT'],
            ['id' => '8', 'nama' => 'DANI ARDIANSYAH, ST', 'nip' => '198306162005021004', 'jabatan' => 'Kepala Bidang Bina Program DPUPR', 'opd_tp' => 'OPD_TP_02', 'bidang' => 'BINA PROGRAM'],
            ['id' => '9', 'nama' => 'EKO PREMONO, ST, MM', 'nip' => '197409052005011006', 'jabatan' => 'Kepala Bidang Sumber Daya Air DPUPR', 'opd_tp' => 'OPD_TP_02', 'bidang' => 'SUMBER DAYA AIR'],
            ['id' => '10', 'nama' => 'AFTON RIZA FASANI, ST', 'nip' => '197310052006041015', 'jabatan' => 'Kepala Bidang Bina Marga DPUPR', 'opd_tp' => 'OPD_TP_02', 'bidang' => 'BINA MARGA'],
            ['id' => '11', 'nama' => 'WIRYAWAN WIDIANTO, ST, MM', 'nip' => '197606212005011009', 'jabatan' => 'Kepala Bidang Cipta Karya DPUPR', 'opd_tp' => 'OPD_TP_02', 'bidang' => 'CIPTA KARYA'],
            ['id' => '12', 'nama' => 'RENI ANDRIANA, SP, M.Si', 'nip' => '196810051998032003', 'jabatan' => 'Kepala Bidang Penataan Ruang DPUPR', 'opd_tp' => 'OPD_TP_02', 'bidang' => 'PENATAAN RUANG'],
            ['id' => '13', 'nama' => 'PURWANTO ADI NUGROHO, ST', 'nip' => '197606032005021003', 'jabatan' => 'Kepala UPTD Pemeliharaan Jalan dan Irigasi Wilayah I', 'opd_tp' => 'OPD_TP_02', 'bidang' => 'UPTD Pemeliharaan Jalan dan Irigasi Wilayah I'],
            ['id' => '14', 'nama' => 'MUGIYONO, ST, M.Si', 'nip' => '196611151991021002', 'jabatan' => 'Kepala UPTD Pemeliharaan Jalan dan Irigasi Wilayah II', 'opd_tp' => 'OPD_TP_02', 'bidang' => 'UPTD Pemeliharaan Jalan dan Irigasi Wilayah II'],
            ['id' => '15', 'nama' => 'TEGUH SETYO ROHMADI, A.Md', 'nip' => '197407271998031002', 'jabatan' => 'Kepala UPTD Pemeliharaan Jalan dan Irigasi Wilayah III', 'opd_tp' => 'OPD_TP_02', 'bidang' => 'UPTD Pemeliharaan Jalan dan Irigasi Wilayah III'],
            ['id' => '16', 'nama' => 'HENGKY KURNIAWAN, ST', 'nip' => '197002011996031004', 'jabatan' => 'Kepala UPTD Pemeliharaan Jalan dan Irigasi Wilayah IV', 'opd_tp' => 'OPD_TP_02', 'bidang' => 'UPTD Pemeliharaan Jalan dan Irigasi Wilayah IV'],
            ['id' => '17', 'nama' => 'SUPARMAN, ST', 'nip' => '196603141991111001', 'jabatan' => 'Kepala UPTD Pemeliharaan Jalan dan Irigasi Wilayah V', 'opd_tp' => 'OPD_TP_02', 'bidang' => 'UPTD Pemeliharaan Jalan dan Irigasi Wilayah V'],
            ['id' => '18', 'nama' => 'KRISTYA RINAWAN,ST, MT', 'nip' => '197711082006041020', 'jabatan' => 'UPT Peralatan', 'opd_tp' => 'OPD_TP_02', 'bidang' => 'UPT Peralatan'],
        ];

        foreach ($data as $datum) {
            Atasan::create($datum);
        }
    }
}
