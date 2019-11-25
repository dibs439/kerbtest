<?php

namespace App\Http\Middleware;

use Closure;
use App\RequestLog;

class ReqLogger
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
        $response = $next($request);

        RequestLog::create([
            'request' => $request,
            'response' => $response,
        ]);

        return $next($request);
    }
}
