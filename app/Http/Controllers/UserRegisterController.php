<?php

namespace App\Http\Controllers;

use Mail;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Validator;

class UserRegisterController extends Controller
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
    public function showRegister()
    {
        /*
         * If there's an ajax request to the login page assume the person has been
         * logged out and redirect them to the login page
         */
        return view('searce.register');
    }

    /**
     * Handles the login request.
     *
     * @param Request $request
     *
     * @return mixed
     */
    public function postRegister(Request $request)
    {
        try {
            $url = (explode('.', $_SERVER['HTTP_HOST']));
            $validator = Validator::make($request->all(), [
                'first_name' => 'required',
                'job_title' => 'required',
                'company' => 'required',
                'phone' => 'required',
                'email' => 'required',
            ]);

            if($validator->fails()) throw new Exception (json_encode($validator->errors()));
            $data = $request->all();
            $data['subqis'] = $url[0];
            $user = User::create($data);

            if(!$user) throw new Exception ('Failed store user');
            // $email = $user->email;
            // $subject = "Email Confirmation";

            // Mail::send('Public.Send', ['name' => $user->first_name], function ($message) use ($email, $subject) {

            //     $message->subject($subject);

            //     $message->from('donotreply@bliblipartnergathering2021.com', 'bliblipartnergathering2021');

            //     $message->to($email);
            // });
            return redirect('/thankyou');
        } catch (Exception $e) {
            Log::info('Error Registration: '.$e->getMessage());
            return back()->withInput()->with('error', 'Failed to register');
        }
    }
}
