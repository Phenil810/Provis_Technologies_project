<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class SessionController extends Controller
{
    public function closePreviousSession(Request $request)
{
    $ip = $request->ip();

    // Log IP address to see if it's being correctly received
    Log::info('IP Address: ' . $ip);

    // ...rest of the code
}
}
