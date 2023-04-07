<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'role_level' => 1,
                'role_name' => 'Super Admin'
            ],
            [
                'role_level' => 2,
                'role_name' => 'Admin'
            ]
        ];

        DB::table('roles')->delete();
        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
