<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Oferta;
use Illuminate\Support\Facades\Auth;

class ShareData
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
        $numusers = User::all()->count();
        $numofertasadmin = Oferta::all()->count();

        if(Auth::check() && Auth::user()->role->desc == 'empresa') {
            $numofertas =  Oferta::where('empresa_id' , Auth::user()->id)->count();
            view()->share('numofertas' , $numofertas);
        }
        
        view()->share('numofertasadmin' , $numofertasadmin);
        view()->share('numusers', $numusers);


        return $next($request);
    }
}
