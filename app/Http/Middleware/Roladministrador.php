<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class Roladministrador
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
        //return $next($request);
        Auth::user();
        if(Auth()->user()->role_id== "1"){
            return redirect('catalogos');
            //return redirect(route('catalogos2.index2')); 
        }else{
            return redirect(route('catalogos2.index2')); 
            //return redirect('catalogos');
            
        }    
    }    
}
