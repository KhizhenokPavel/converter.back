<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckApiKey
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $apiKey = $request->header('Apikey');

        if (!$apiKey || $apiKey != env('APP_API_KEY')) { 
            return response()->json(['error' => $apiKey . ':' . env('APP_API_KEY')], 401);
        }

        return $next($request);
    }
}
