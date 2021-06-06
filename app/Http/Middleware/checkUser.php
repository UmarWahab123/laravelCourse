<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkUser
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
        //middleware can be apply on three way 1)at global level(on whole app) 2)at group level 3)at route level 4)both group or individual

        echo "CheckUser Middleware is applied on his Route";
        return $next($request);
    }
}
