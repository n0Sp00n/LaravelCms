<?php

namespace App\Http\Middleware;

use Closure;
use HttpException;

class RegularUserMiddleware
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
        if ($request->user()->isAdmin == 0)
		{
			abort(403, 'You are unauthorized to access this information.');
		}
        return $next($request);
    }
}
