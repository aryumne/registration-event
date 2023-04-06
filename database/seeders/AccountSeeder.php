<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Role;
use App\Models\Account;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->delete();
        $role = Role::where('role_level', 1)->first();
        Account::create([
            'name'      => 'Digital Gluvia',
            'username'  => 'gluvia',
            'email'     => 'digital@gluvia.com',
            'password'  => Hash::make('Gluvi@123'),
            'remember_me'   => true,
            'role_id'       => $role->id,
            'email_verified_at' => Carbon::now(),
        ]);
    }
}
