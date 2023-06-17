<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DemoMiddileWare
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //$request->headers->add(['$email'=>'test@example.com']);
        //$request->headers->replace(['$email'=>'test@example.com']);

        $request->headers->remove('email'); //This will be remove email inside header
        return $next($request);
    }
}
