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
        switch (auth()->user()->status) 
        {
            case 'verified':
                return $next($request);
            case 'unverified':
                toastr()->info('Please, check your email to verify your account', 'Unverified Account');
                return back();
            case 'suspended':
                return redirect('/')->withErrors("Account Suspended", "Your account has been suspended, please contact administrator");
        }

        abort(401);
    }
}
