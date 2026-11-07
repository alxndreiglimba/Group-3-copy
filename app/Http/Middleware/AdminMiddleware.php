<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user is logged in AND if their role is admin
        if (auth()->check() && auth()->user()->role === 'admin') {
            return $next($request);
        }

        // If they are a standard student, deny access with a 403 error
        abort(403, 'Unauthorized action. Admin access only.');
    }
}
