<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function create() {
        return view('admin.login');
    }

    public function destroy() {

    }
}
