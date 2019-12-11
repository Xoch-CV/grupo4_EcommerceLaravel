<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\View;
use App\Cart;

class CartMiddleware
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
        if(auth()->check()) {
          
          $cart = auth()->user()->carts()->open()->latest()->first();

        } else {
         $cart = new Cart;
       }

        View::share('order', $cart);

        return $next($request);
    }
}
