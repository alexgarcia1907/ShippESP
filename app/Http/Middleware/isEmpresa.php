<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isEmpresa
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $roledesc = Auth::user()->role->desc;
        if (Auth::user() &&  $roledesc == 'empresa') {
            return $next($request);
        }
        return redirect('/');
    }
}
