<?php

namespace App\Http\Middleware;

use Closure;
use App\Settings as MSettings;

class CheckRegKey
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
        if(empty($_GET['key']) || $_GET['key'] !== MSettings::where('variable', 'regkey') -> first() -> value)
            return abort(404);
        else
            return $next($request);
    }
}
