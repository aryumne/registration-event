<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Role;
use App\Models\Event;
use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AccountController extends Controller
{
    public function index() {
        $accounts = Account::all();
        return view('admin.pages.accounts', [
            'accounts' => $accounts
        ]);
    }

    public function showLogin() {
        return view('admin.login');
    }

    public function login() {
        return view('admin.login');
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
            logStore(CREATE_EVENT, $account, STATUS_SUCCESS);
            return back()->with('success', 'Event created successfully');
        } catch (Exception $e) {
            logStore(CREATE_EVENT, $e->getMessage(), STATUS_ERROR);
            return back()->withInput()->with('error', 'Failed to store event');
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

    public function destroy() {
        return redirect('/admin');
    }
}
