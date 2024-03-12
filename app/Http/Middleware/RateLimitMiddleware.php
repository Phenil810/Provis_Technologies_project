<?php

namespace App\Http\Middleware;

use App\Models\Session;
use Closure;

class RateLimitMiddleware
{
    public function handle($request, Closure $next)
    {
        $ip = $request->ip();

        $existingSession = Session::where('ip_address', $ip)->first();

        if ($existingSession) {
            // Session already exists for this IP
            return response()->json(['message' => 'Another session is already in progress.'], 403);
        }

        // Create a new session
        Session::create(['ip_address' => $ip]);

        return $next($request);
    }
}
