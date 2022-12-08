<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        if(! Auth::check()){
            return redirect('login');
        }
        if ($request->user()->role != '0' && $request->user()->role != '1') {
            return redirect('/welcome')->with('you dont have permission'); // <- needs work
        }

        return $next($request);
    }

}
