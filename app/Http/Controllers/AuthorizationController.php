<?php

namespace App\Http\Controllers;

use App\Models\Authorize;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;

class AuthorizationController extends Controller
{
    public function index(){
        $roles = Role::all();
        $permissions = Permission::all();
        $gates = Authorize::all();
        return view('admin.pages.authorizations', [
            'roles' => $roles,
            'permissions' => $permissions,
            'gates' => $gates
        ]);
    }

    public function showGatesRole($uuid) {

    }

    public function storeRole(Request $request) {
        
    }

    public function storePermission(Request $request) {
        
    }

    public function storeGates(Request $request) {

    }

    public function deleteGateRole($uuid) {
        
    }
}
