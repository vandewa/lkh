<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminDPUPRSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            "email" => "dpupr@wonosobokab.go.id",
            "password" => bcrypt('password'),
            "opd_tp" => "OPD_TP_02",
            "name" => "Admin DPUPR"
        ]);
        $admin->assignRole('admin-dpupr');
    }
}
