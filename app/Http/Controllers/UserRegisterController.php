<?php

namespace App\Http\Controllers;

use Mail;
use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Rap2hpoutre\FastExcel\Facades\FastExcel;

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

    public function index()
    {
        $users = User::all();
        return view('admin.pages.users', [
            'users' => $users
        ]);
    }

    public function exportUsers() {
        return redirect()->route('download');
    }

    public function download() {
        If(!Auth::check()) {
            return redirect()->route('login');
        }
        $users = User::all();
        if (Auth::user()->role->role_level == 2) {
            $adminsEvent = Auth::user()->event->event_name;
            $users = User::where('subqis', $adminsEvent)->get();
        }
        $data = [];

        foreach ($users as $user) {
            unset($user['api_token']);
            unset($user['created_at']);
            unset($user['updated_at']);
            $data[] = $user;
        }
        return FastExcel::data($data)->download('users.xlsx');
    }

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

            if ($validator->fails()) throw new Exception(json_encode($validator->errors()));
            $data = $request->all();
            $data['subqis'] = $url[0];
            $checkExisting = User::where('email', $data['email'])->where('subqis', $data['subqis'])->first();
            if($checkExisting) {
                logStore(REGISTER_USER, 'Email has already registered in this event', STATUS_ERROR);
                return back()->withInput()->with('error', 'Email has already registered in this event');
            }
            
            $user = User::create($data);
            if (!$user) throw new Exception('Failed store user');
            logStore(REGISTER_USER, $user, STATUS_SUCCESS);
            return redirect('/thankyou');
        } catch (Exception $e) {
            logStore(REGISTER_USER, $e->getMessage(), STATUS_ERROR);
            return back()->withInput()->with('error', 'Registration Failed');
        }
    }

    public function destroy($uuid) {
        try {
            $user = User::find($uuid);
            if (!$user) throw new Exception('User not found');
            logStore(DELETE_USER, $user, STATUS_SUCCESS);
            $user->delete();
            return back()->with('success', 'Successfully deleted');
        } catch (Exception $e) {
            logStore(DELETE_USER, $e->getMessage(), STATUS_ERROR);
            return back()->withInput()->with('error', 'Failed to delete user');
        }
    }
}
