<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Inertia\Inertia;

class LoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure(Request): (Response|RedirectResponse) $next
     * 
     */
    public function handle(Request $request, Closure $next)
    {
        if (session('username')) {
            return $next($request);
        }
        // 
        return Inertia::render('Login');
    }
}