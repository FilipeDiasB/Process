<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, string $param)
    {
        $params = [
          'master' => [1],
          'admin' => [1, 2],
          'profissional' => [1, 2, 3]
        ];

        abort_if(!in_array(auth()->user()->user_permission_id, $params[$param] ?? []), Response::HTTP_FORBIDDEN);

        return $next($request);
    }
}
