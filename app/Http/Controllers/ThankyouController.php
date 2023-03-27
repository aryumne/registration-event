<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Redirect;
use View;
use Auth;
use Validator;
use Mail;

class ThankyouController extends Controller
{
    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Shows login form.
     *
     * @param Request $request
     *
     * @return mixed
     */
    public function showThankyou(Request $request)
    {
        /*
         * If there's an ajax request to the login page assume the person has been
         * logged out and redirect them to the login page
         */
        $data = [
            'question1' => 0
        ];
        
        echo "<script>setTimeout(function(){ window.location.href = '/'; }, 5000);</script>";

        return view('searce.congrats', $data);
    }

}
