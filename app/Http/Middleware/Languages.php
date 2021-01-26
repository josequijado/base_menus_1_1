<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class Languages
{
    public function handle($request, Closure $next)
    {
        if (session()->has('locale')) {
            App::setLocale(session('locale'));
        } else {
            App::setLocale('es');
        }

        return $next($request);
    }
}
