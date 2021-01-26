<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Redirect;

class UserDataVerified
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
        if (!$request->user()) {
            return redirect()->route('BM_index');
        }
        if ((env('MAIL_MUST_BE_VERIFIED') && $request->user()->email_verified_at === null) ||
            (env('PHONE_MUST_BE_VERIFIED') && $request->user()->phone_verified_at === null)) {
                return redirect()->route('BM_check_if_verified');
        }
        return $next($request);
    }
}
