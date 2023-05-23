<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'superadmin',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'admin-bpbd',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'admin-dpupr',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'user-bpbd',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'user-dpupr',
            'guard_name' => 'web'
        ]);

    }
}
