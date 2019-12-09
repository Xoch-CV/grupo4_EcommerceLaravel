<?php

namespace App\Http\Middleware;

use Closure;

class administrador
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
      if ($request->User()->role==2) {
        return route('login');
      }
        return $next($request);
    }
}
