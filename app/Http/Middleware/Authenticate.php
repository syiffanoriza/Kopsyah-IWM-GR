<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            return null;
        }

        if ($request->is(['admin', 'admin/*'])) {
            return $request->expectsJson()? null : route('admin.login');
        } elseif ($request->is(['user', 'user/*'])) {
            return $request->expectsJson()? null : route('auth.login');
        } else {
            return null;
        }
    }
}
