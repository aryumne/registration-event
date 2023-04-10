<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Role;
use App\Models\Event;
use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\AuthenticationException;

class AccountController extends Controller
{
    public function index() {
        $accounts = Account::all();
        $roles    = Role::all();
        $events   = Event::all();
        return view('admin.pages.accounts', [
            'accounts' => $accounts,
            'roles' => $roles,
            'events' => $events
        ]);
    }

    public function login() {
        if(Auth::check()) {
            return redirect()->route('dashboard');
        }
        return view('admin.login');
    }

    public function authenticate(Request $request)
    {

        try {
            $validator = Validator::make($request->all(), [
                'username' => ['required'],
                'password' => ['required'],
            ]);
            if ($validator->fails()) throw new Exception($validator->errors());
    
            if (Auth::attempt(['username' => $request->username, 'password' => $request->password, 'is_active' => 1])) {
                $request->session()->regenerate();
                logStore(LOGIN_SUCCESS, json_encode($request->all()), STATUS_SUCCESS);
                return redirect()->route('dashboard');
            } else {
                throw new Exception('The provided credentials do not match our records');
            }
        } catch (Exception $e) {
            logStore(LOGIN_FAILED, $e->getMessage(), STATUS_ERROR);
            return back()->with(STATUS_ERROR, 'The provided credentials do not match our records.');
        }

    }

    public function storeAccount(Request $request) {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'username' => 'required',
                'email' => 'required',
                'password' => 'required',
                'role_id'   => 'required',
            ]);
            if ($validator->fails()) throw new Exception(json_encode($validator->errors()));

            $checkRole = Role::find($request->role_id);
            if($checkRole->role_level == 2) {
                if($request->has('event_id')) {
                    $event = Event::find($request->event_id);
                    if(!$event) throw new Exception('Event not found');
                } else {
                    throw new Exception('Event not found');
                }
            }
            $data = $request->all();
            $data['password'] = Hash::make($request->password);
            $account = Account::create($data);

            if (!$account) throw new Exception('Something went wrong on creating the event');
            logStore(CREATE_ACCOUNT, $account, STATUS_SUCCESS);
            return back()->with('success', 'Event created successfully');
        } catch (Exception $e) {
            logStore(CREATE_ACCOUNT, $e->getMessage(), STATUS_ERROR);
            return back()->withInput()->with('error', 'Failed to create account!');
        }
    }

    public function deactivateAccount($uuid) {
        try {
            $account = Account::find($uuid);
            if (!$account) throw new Exception('Account not found');
            $account->is_active = false;
            $account->save();
            logStore(UPDATE_ACCOUNT, $account, STATUS_SUCCESS);
            return back()->with('success', 'Event created successfully');
        } catch (Exception $e) {
            logStore(UPDATE_ACCOUNT, $e->getMessage(), STATUS_ERROR);
            return back()->withInput()->with('error', 'Failed to deactivate account');
        }
    }

    public function edit($uuid) {
        $account = Account::find($uuid);
        $roles   = Role::all();
        $events  = Event::all();
        $auth    = Auth::user();
        if($auth->role->role_level == 2) {
            $account = Account::find($auth->id);
            $roles   = Role::where('id', $auth->role_id)->get();
            $events  = Event::where('id', $auth->event_id)->get();
        }

        return view('admin.pages.settings', [ 
            'account' => $account,
            'roles' => $roles,
            'events' => $events
        ]);
    }

    public function update(Request $request, $uuid)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'username' => 'required',
                'email' => 'required',
                'role_id'   => 'required',
            ]);
            if ($validator->fails()) throw new Exception(json_encode($validator->errors()));

            $checkRole = Role::find($request->role_id);
            if ($checkRole->role_level == 2) {
                if ($request->has('event_id')) {
                    $event = Event::find($request->event_id);
                    if (!$event) throw new Exception('Event not found');
                } else {
                    throw new Exception('Event not found');
                }
            }
            $data = $request->all();
            if($request->has('password')) {
                if($request->password != '' || $request->password != '') {
                    $data['password'] = Hash::make($request->password);
                } else {
                    unset($data['password']);
                }
            }
            $account = Account::findOrFail($uuid)->update($data);
            if (!$account) throw new Exception('Something went wrong on creating the event');
            logStore(UPDATE_ACCOUNT, json_encode($request->all()), STATUS_SUCCESS);
            return back()->with('success', 'Event created successfully');
        } catch (Exception $e) {
            logStore(UPDATE_ACCOUNT, $e->getMessage(), STATUS_ERROR);
            return back()->withInput()->with('error', 'Failed to create account!');
        }
    }


    public function destroy(Request $request) {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return redirect('/admin');
    }
}
