<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class LogRequestMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */


     //Here is the problem no.3 about group Global Middleware
    public function handle(Request $request, Closure $next): Response
    {
        $method = $request->getMethod();
        $url = $request->fullUrl();

        Log::info("Request Method: $method | URL: $url");

        return $next($request);
    }
}
