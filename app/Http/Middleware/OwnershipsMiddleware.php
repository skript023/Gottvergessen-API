<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class OwnershipsMiddleware
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
        foreach (auth()->user()->binaries as $binary) 
        {
            if (auth()->user()->ownership_id == $binary->ownership_id)
            {
                return $next($request);
            }
            else if (auth()->user()->ownership_id > $binary->ownership_id)
            {
                return $next($request);
            }
        }

        if ($request->expectsJson())
        {
            return response()->json([
                'game' => '',
                'file' => 'NONE',
                'target' => 'game.exe',
                'version' => 'NONE',
                'version_machine' => 0,
                'supported' => false,
                'valid' => false
            ], 401);
        }

        abort(401);
    }
}
