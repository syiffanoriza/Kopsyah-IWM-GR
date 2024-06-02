<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ShareUserData
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            return $next($request);
        } else {
            // FETCH USER NAME DARI DB
            $name = explode(' ', Auth::user()->name);
    
            if (count($name) === 1) {
                $letters = $name[0][0];
            } else {
                $letters = $name[0][0] . $name[1][0];
            }
        
            if (count($name) <= 2) {
                // JIKA NAMA TIDAK LEBIH DARI 2 KATA, TAMPIL LENGKAP
                $username = implode(' ', array_slice($name, 0, count($name)));
            } else {
                // JIKA NAMA ADA LEBIH DARI 2 KATA, TAMPILKAN NAMA KE 3+ SEBAGAI INISIAL
                $initials = array_map(function ($part) {
                    return $part[0];
                }, array_slice($name, 2));
                $username = $name[0] . ' ' . $name[1] . ' ' . implode('.', $initials);
            }
    
            view()->share('username', $username);
            view()->share('letters', $letters);
            
            return $next($request);
        }
    }
}
