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
    public function run(): void
    {
        DB::table('com_codes')->truncate();
        $data = [
            ['code_cd' => 'TEMA_01', 'code_nm' => 'bg-theme bg-theme2', 'code_group' => 'TEMA', 'code_value' => ''],
            ['code_cd' => 'JABATAN_TP_01', 'code_nm' => 'TRC', 'code_group' => 'JABATAN_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_TP_02', 'code_nm' => 'TRC DAMKAR', 'code_group' => 'JABATAN_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_TP_03', 'code_nm' => 'ADMIN', 'code_group' => 'JABATAN_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_TP_04', 'code_nm' => 'PUSDALOPS', 'code_group' => 'JABATAN_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_TP_05', 'code_nm' => 'AGENDARIS', 'code_group' => 'JABATAN_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_DPUPR_TP_01', 'code_nm' => 'Admin Kepegawaian ', 'code_group' => 'JABATAN_DPUPR_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_DPUPR_TP_02', 'code_nm' => 'Driver', 'code_group' => 'JABATAN_DPUPR_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_DPUPR_TP_03', 'code_nm' => 'OS Jaga Malam', 'code_group' => 'JABATAN_DPUPR_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_DPUPR_TP_04', 'code_nm' => 'Admin Keuangan', 'code_group' => 'JABATAN_DPUPR_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_DPUPR_TP_05', 'code_nm' => 'Tenaga Administrasi ', 'code_group' => 'JABATAN_DPUPR_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_DPUPR_TP_06', 'code_nm' => 'Tenaga Surveyor', 'code_group' => 'JABATAN_DPUPR_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_DPUPR_TP_07', 'code_nm' => 'Tenaga Teknis Operator', 'code_group' => 'JABATAN_DPUPR_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_DPUPR_TP_08', 'code_nm' => 'Tenaga Teknis Tim Penilik', 'code_group' => 'JABATAN_DPUPR_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_DPUPR_TP_09', 'code_nm' => 'Tenaga Ahli SIMBG', 'code_group' => 'JABATAN_DPUPR_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_DPUPR_TP_10', 'code_nm' => 'Tenaga Administrasi Leger', 'code_group' => 'JABATAN_DPUPR_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_DPUPR_TP_11', 'code_nm' => 'Tenaga Administrasi PKRMS', 'code_group' => 'JABATAN_DPUPR_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_DPUPR_TP_12', 'code_nm' => 'Admin Rehabilitasi Jalan', 'code_group' => 'JABATAN_DPUPR_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_DPUPR_TP_13', 'code_nm' => 'Tenaga Teknis Rehabilitasi Jalan', 'code_group' => 'JABATAN_DPUPR_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_DPUPR_TP_14', 'code_nm' => 'Tenaga Pembantu Pelaksana Pemeliharaan Jalan dan Jembatan', 'code_group' => 'JABATAN_DPUPR_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_DPUPR_TP_15', 'code_nm' => 'Tenaga Administrasi Rekontruksi Jalan', 'code_group' => 'JABATAN_DPUPR_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_DPUPR_TP_16', 'code_nm' => 'Tenaga Operator Pemeliharaan Jalan dan Jembatan', 'code_group' => 'JABATAN_DPUPR_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_DPUPR_TP_17', 'code_nm' => 'Tenaga Administrasi Pemeliharaan Jalan dan Jembatan', 'code_group' => 'JABATAN_DPUPR_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_DPUPR_TP_18', 'code_nm' => 'Tenaga Administrasi Pemeliharaan Berkala Jalan', 'code_group' => 'JABATAN_DPUPR_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_DPUPR_TP_19', 'code_nm' => 'Tenaga Survey PKRMS', 'code_group' => 'JABATAN_DPUPR_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_DPUPR_TP_20', 'code_nm' => 'Tenaga Administrasi UPTD Pemeliharaan Jalan dan Irigasi Wilayah I', 'code_group' => 'JABATAN_DPUPR_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_DPUPR_TP_21', 'code_nm' => 'Tenaga Mandor UPTD Pemeliharaan Jalan dan Irigasi Wilayah I', 'code_group' => 'JABATAN_DPUPR_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_DPUPR_TP_22', 'code_nm' => 'OS Kebersihan Kantor UPT Wilayah II', 'code_group' => 'JABATAN_DPUPR_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_DPUPR_TP_23', 'code_nm' => 'Tenaga Administrasi UPTD Pemeliharaan Jalan dan Irigasi Wilayah II', 'code_group' => 'JABATAN_DPUPR_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_DPUPR_TP_24', 'code_nm' => 'Tenaga Administrasi UPTD Pemeliharaan Jalan dan Irigasi Wilayah III', 'code_group' => 'JABATAN_DPUPR_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_DPUPR_TP_25', 'code_nm' => 'Tenaga Mandor UPTD Pemeliharaan Jalan dan Irigasi Wilayah III', 'code_group' => 'JABATAN_DPUPR_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_DPUPR_TP_26', 'code_nm' => 'OS Kebersihan Kantor UPT Wilayah III', 'code_group' => 'JABATAN_DPUPR_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_DPUPR_TP_27', 'code_nm' => 'Tenaga Mandor UPTD Pemeliharaan Jalan dan Irigasi Wilayah IV', 'code_group' => 'JABATAN_DPUPR_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_DPUPR_TP_28', 'code_nm' => 'Tenaga Administrasi UPTD Pemeliharaan Jalan dan Irigasi Wilayah IV', 'code_group' => 'JABATAN_DPUPR_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_DPUPR_TP_29', 'code_nm' => 'OS Kebersihan Kantor UPT Wilayah IV', 'code_group' => 'JABATAN_DPUPR_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_DPUPR_TP_30', 'code_nm' => 'Tenaga Administrasi UPTD Pemeliharaan Jalan dan Irigasi Wilayah V', 'code_group' => 'JABATAN_DPUPR_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_DPUPR_TP_31', 'code_nm' => 'Tenaga Mandor UPTD Pemeliharaan Jalan dan Irigasi Wilayah V', 'code_group' => 'JABATAN_DPUPR_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_DPUPR_TP_32', 'code_nm' => 'Tenaga Administrasi UPT Peralatan', 'code_group' => 'JABATAN_DPUPR_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_DPUPR_TP_33', 'code_nm' => 'Tenaga Teknik UPT Peralatan', 'code_group' => 'JABATAN_DPUPR_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_DPUPR_TP_34', 'code_nm' => 'Tenaga Driver dan Operator UPT Peralatan', 'code_group' => 'JABATAN_DPUPR_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_DPUPR_TP_35', 'code_nm' => 'Tenaga Operator UPT Peralatan', 'code_group' => 'JABATAN_DPUPR_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_DPUPR_TP_36', 'code_nm' => 'Admin OP Irigasi', 'code_group' => 'JABATAN_DPUPR_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_DPUPR_TP_37', 'code_nm' => 'Admin OP Drainase', 'code_group' => 'JABATAN_DPUPR_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_DPUPR_TP_38', 'code_nm' => 'Admin Rehab Irigasi', 'code_group' => 'JABATAN_DPUPR_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_DPUPR_TP_39', 'code_nm' => 'Teknisi Utama / Analis SIG', 'code_group' => 'JABATAN_DPUPR_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_DPUPR_TP_40', 'code_nm' => 'Tenaga Teknis Penataan Ruang', 'code_group' => 'JABATAN_DPUPR_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_DPUPR_TP_41', 'code_nm' => 'Tenaga Teknis Bidang Penataan Ruang', 'code_group' => 'JABATAN_DPUPR_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_DPUPR_TP_42', 'code_nm' => 'Tenaga Teknis Pemetaan', 'code_group' => 'JABATAN_DPUPR_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_DPUPR_TP_43', 'code_nm' => 'Staff', 'code_group' => 'JABATAN_DPUPR_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_DPUPR_TP_44', 'code_nm' => 'Asisten Sanitasi', 'code_group' => 'JABATAN_DPUPR_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_DPUPR_TP_45', 'code_nm' => 'Asisten Air Minum', 'code_group' => 'JABATAN_DPUPR_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_DPUPR_TP_46', 'code_nm' => 'Koordinator TFL', 'code_group' => 'JABATAN_DPUPR_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_DPUPR_TP_47', 'code_nm' => 'TFL Pemberdayaan', 'code_group' => 'JABATAN_DPUPR_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_DPUPR_TP_48', 'code_nm' => 'TFL Teknik', 'code_group' => 'JABATAN_DPUPR_TP', 'code_value' => ''],
            ['code_cd' => 'JABATAN_DPUPR_TP_49', 'code_nm' => 'Tenaga Mandor UPTD Pemeliharaan Jalan dan Irigasi Wilayah II', 'code_group' => 'JABATAN_DPUPR_TP', 'code_value' => ''],
            ['code_cd' => 'OPD_TP_01', 'code_nm' => 'BPBD', 'code_group' => 'OPD_TP', 'code_value' => ''],
            ['code_cd' => 'OPD_TP_02', 'code_nm' => 'DPUPR', 'code_group' => 'OPD_TP', 'code_value' => ''],
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