<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckPersonData
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!Auth::user()->person()->first()->document()->first()
        || !Auth::user()->person()->first()->phone()->first()
        )
        {
            session()->flash('status', 'Necesitas llenar tus datos antes');
            return redirect()->route('register.create',[
                'user' => Auth::user()->person()->first(),
            ]);
        }
        return $next($request);
    }
}
