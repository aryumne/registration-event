<?php

namespace App\Providers;

use App\Models\Permission;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Schema;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        if (Schema::hasTable('permissions')) {
            $permissions = Permission::all();
            foreach ($permissions as $p) {
                foreach ($p->role as $role) {
                    $roless[$p->permission_sluk][] = $role->id;
                }
            }

            foreach ($roless as $namePermission => $roles) {
                Gate::define($namePermission, function () use ($roles) {
                    $roleAuth[] = Auth::user()->role_id;
                    return count(array_intersect($roles, $roleAuth)) > 0;
                });
            }
        }
    }
}
