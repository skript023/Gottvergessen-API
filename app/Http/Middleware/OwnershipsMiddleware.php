<?php

namespace App\Http\Middleware;

use App\Models\binary;
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
        $binary = binary::where('game', $request->name)->orWhere('file', $request->name)->first();

        if (!$binary)
        {
            return response()->json([
            'id' => 0,
            'game' => 'BAD_REQUEST',
            'file' => 'BAD_REQUEST',
            'target' => 'BAD_REQUEST',
            'version' => 'BAD_REQUEST',
            'version_machine' => 0,
            'supported' => 0,
            'valid' => 0
            ], 404);
        }

        if (auth()->user()->ownership_id <= $binary->ownership_id)
        {
            return $next($request);
        }

        return response()->json([
            'id' => 0,
            'game' => 'NO_ACCESS',
            'file' => 'NO_ACCESS',
            'target' => 'NO_ACCESS',
            'version' => 'NO_ACCESS',
            'version_machine' => 0,
            'supported' => 0,
            'valid' => 0
        ], 401);
    }
}
