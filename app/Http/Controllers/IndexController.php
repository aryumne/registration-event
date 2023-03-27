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
        /*
         * If there's an ajax request to the login page assume the person has been
         * logged out and redirect them to the login page
         */
        $time = Carbon::now();
        $time_test = "2021-08-27 12:00:00";

        if ($time->lessThanOrEqualTo($time_test)) {
            return redirect()->to(route('home'));
        } else {
            return redirect()->to(route('live'));
        }
    }
}
