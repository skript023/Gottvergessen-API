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
        $access = access_level::where('name', 'Staff')->first();

        if (is_null($request->id)) 
        {
            $restriction = restriction::where('route', $request->getPathInfo())->first();

            if (is_null($restriction)) abort(404);

            if (isset($request->page))
            {
                if ($request->page == 'edit' && auth()->user()->access_level->update == 0) 
                    abort(401);
            }

            if (auth()->user()->level <= $restriction->level)
            {
                if (!auth()->user()->access_level->update && $restriction->action == 'edit')
                    abort(401);

                if (!auth()->user()->access_level->delete && $restriction->action == 'delete')
                    abort(401);

                if (!auth()->user()->access_level->create && $restriction->action == 'create')
                    abort(401);

                return $next($request);
            }
        }
        else
        {
            if (auth()->user()->roles->level <= $access->id)
            {
                return $next($request);
            }
        }

        abort(401);
    }
}
