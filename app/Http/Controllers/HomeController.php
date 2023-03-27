<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Redirect;
use View;
use Illuminate\Support\Carbon;
use Auth;
use Validator;

class HomeController extends Controller
{

    /**
     * Shows login form.
     *
     * @param Request $request
     *
     * @return mixed
     */
    public function showHome(Request $request)
    {
        $time = Carbon::now();
        $time_test = "2021-08-27 12:00:00";

        if ($time->lessThanOrEqualTo($time_test)) {
            $login = 0;

            return view('welcome', compact('login'));
        } else {
            return redirect()->to(route('live'));
        }
    }

    public function showDemo(Request $request)
    {
        if (Auth::check()) {
            $login = 1;
        } else {
            $login = 0;
        }

        return view('demo', compact('login'));
    }

    public function showLive(Request $request)
    {
        if (Auth::check()) {
            $login = 1;
        } else {
            $login = 0;
        }

        return view('live', compact('login'));
    }
}
