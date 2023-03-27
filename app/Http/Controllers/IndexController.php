<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Redirect;
use View;
use Illuminate\Support\Carbon;
use Auth;
use Validator;

class IndexController extends Controller
{

    /**
     * Shows login form.
     *
     * @param Request $request
     *
     * @return mixed
     */
    public function showIndex(Request $request)
    {
        return view('searce.welcome');

    }
}
