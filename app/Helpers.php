<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;


/**
 * logStore
 *
 * @param  string $action
 * @param  mixed $data
 * @param  enum $status
 * @return void
 */
function logStore($action, $data, $status)
{
    $data = [
        'user'        => Auth::check() ? Auth::user()->username : "User not logged in",
        'description' => $data,
        'action_at'   => Carbon::now()->toDateTimeString()
    ];

    switch ($status) {
        case 'success':
            Log::info($action, $data);
            break;
        case 'warning':
            Log::warning($action, $data);
            break;
        case 'error':
            Log::error($action, $data);
            break;
        default:
            Log::info($action, $data);
            break;
    }
}
