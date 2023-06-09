<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            // users
            [
                'permission_sluk' => 'mng-users',
                'permission_name' => 'Manage Users'
            ],

            // Events
            [
                'permission_sluk' => 'mng-events',
                'permission_name' => 'Manage Events'
            ],
            [
                'permission_sluk' => 'create-event',
                'permission_name' => 'Create Events'
            ],
            [
                'permission_sluk' => 'edit-event',
                'permission_name' => 'Edit Event'
            ],

            // Accounts
            [
                'permission_sluk' => 'mng-accounts',
                'permission_name' => 'Manage Accounts'
            ],
            [
                'permission_sluk' => 'create-account',
                'permission_name' => 'Create Account'
            ],
            [
                'permission_sluk' => 'edit-account',
                'permission_name' => 'Edit Account'
            ],
            [
                'permission_sluk' => 'delete-account',
                'permission_name' => 'Delete Accounts'
            ],

            // Authorizeations
            [
                'permission_sluk' => 'mng-gates',
                'permission_name' => 'Manage Autorizations'
            ],
        ];

        DB::table('permissions')->delete();
        foreach ($permissions as $permission) {
            Permission::create($permission);
        }
    }
}
