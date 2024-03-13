<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckSessionKeyExist
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $key)
    {
        if (!$request->session()->has($key)) {
            // Jika kunci sesi tidak ada, Anda dapat melakukan apa pun, seperti redirect atau memberikan respons lainnya
            return redirect('/login');
        }

        return $next($request);
    }
}
