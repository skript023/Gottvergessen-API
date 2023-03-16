<?php

namespace App\Http\Middleware;

use App\Models\access_level;
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
        $access = access_level::where('name', 'First Staff')->first();

        if (is_null($request->id)) 
        {
            $restriction = restriction::where('route', $request->getPathInfo())->first();

            if (is_null($restriction)) abort(404);

            if (isset($request->page))
            {
                if ($request->page == 'edit' && auth()->user()->level > $access->id) 
                    abort(401);
            }

            if (auth()->user()->level <= $restriction->level)
            {
                return $next($request);
            }

            abort(401);
        }
        else
        {
            if (auth()->user()->roles->level <= $access->id)
            {
                return $next($request);
            }

            abort(401);
        }
    }
}
