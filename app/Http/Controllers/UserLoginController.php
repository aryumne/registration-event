<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Redirect;
use View;
use Auth;
use Validator;
use Illuminate\Support\Carbon;

class UserLoginController extends Controller
{
    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
        $this->middleware('guest');
    }

    /**
     * Shows login form.
     *
     * @param Request $request
     *
     * @return mixed
     */
    public function showLogin(Request $request)
    {
        /*
         * If there's an ajax request to the login page assume the person has been
         * logged out and redirect them to the login page
         */
        return view('Public.Login');
    }

    /**
     * Handles the login request.
     *
     * @param Request $request
     *
     * @return mixed
     */
    public function postLogin(Request $request)
    {
        $email = $request->get('email');
        $phone = $request->get('phone');

        $user = User::where('email', $email)->first();

        if ($user) {
            $user->last_login = Carbon::now();

            $user->save();
            
            Auth::login($user, true);

            $data = [
                'login' => true
            ];

            return view('live', $data);
        } else {
            return Redirect::back()
                ->with(['message' => 'Email incorrect', 'failed' => true])
                ->withInput();
        }
    }
}
