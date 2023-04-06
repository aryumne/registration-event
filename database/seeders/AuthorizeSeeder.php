<?php

namespace Database\Seeders;

use App\Models\Authorize;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authorizes')->delete();
        $superAdmin = Role::where('role_level', 1)->first();
        $superGates = Permission::all();
        foreach ($superGates as $sg) {
            Authorize::create([
                'role_id' => $superAdmin->id,
                'permission_id' => $sg->id
            ]);
        }
        
        $admin = Role::where('role_level', 2)->first();
        $adminGates   = Permission::where('permission_sluk', 'mng-users')->orWhere('permission_sluk', 'edit-account')->get();
        foreach ($adminGates as $ag) {
            Authorize::create([
                'role_id' => $admin->id,
                'permission_id' => $ag->id
            ]);
        }
    }
}
