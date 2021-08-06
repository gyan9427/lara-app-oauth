<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class cors
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
        return $next($request)
                ->header('Access-Control-Allow-Origin','*')
                ->header('Access-Control-Allow-Method','POST,PUT')
                ->header('Access-Control-Allow-Header','Accept,Authorization,Content-type');
    }
}
