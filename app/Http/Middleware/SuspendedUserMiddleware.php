<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerifiedUserMiddleware
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
        if (auth()->user()->status === 'verified')
        {
            return $next($request);
        }
        else if (auth()->user()->status === 'unverified')
        {
            return back()->withErrors("Unverified Account", "Please, check your email to verify your account");
        }
        else if (auth()->user()->status === 'suspended')
        {
            return redirect('/')->withErrors("Account Suspended", "Your account has been suspended, please contact administrator");
        }

        abort(401);
    }
}
