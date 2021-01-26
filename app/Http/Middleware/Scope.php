<?php

namespace App\Http\Middleware;

use Closure;

class Scope
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
        $prefix = request()->route()->getPrefix();
        $scope = auth()->user()->scope;

        if (($prefix == '/admin' && $scope == 'U') || ($prefix == '/master' && $scope != 'M')) {
            return redirect(route('user.BM_index'));
        }

        return $next($request);
    }
}
