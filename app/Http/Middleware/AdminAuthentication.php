<?php

namespace App\Http\Middleware;

use App\Models\restriction;
use Closure;
use Illuminate\Http\Request;

class AdminAuthentication
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {   
        if (is_null($request->id)) 
        {
            $access = restriction::where('route', $request->getPathInfo())->first();

            if (is_null($access)) abort(404);

            if (auth()->user()->roles->level >= $access->level)
            {
                return $next($request);
            }

            abort(401);
        }
        else
        {
            if (auth()->user()->roles->name == 'admin')
            {
                return $next($request);
            }

            abort(401);
        }
    }
}
