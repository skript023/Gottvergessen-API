<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SubscriptionMiddleware
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
        if (now()->gte(auth()->user()->expired))
        {
            return response()->json([
                'id' => 0,
                'game' => 'EXPIRED',
                'file' => 'EXPIRED',
                'target' => 'EXPIRED',
                'version' => 'EXPIRED',
                'version_machine' => 0,
                'supported' => 0,
                'valid' => 0
            ], 401);
        }

        return $next($request);
    }
}
