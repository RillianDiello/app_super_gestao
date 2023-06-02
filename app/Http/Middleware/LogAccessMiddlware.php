<?php

namespace App\Http\Middleware;

use App\Models\LogAccess;
use Closure;
use Illuminate\Http\Request;

class LogAccessMiddlware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $ip_server = $request->server->get('REMOTE_ADDR');
        $routerAccessed = $request->getRequestUri();
        LogAccess::create(['log' => "IP: $ip_server acessed the router $routerAccessed"]);
        $resposta = $next($request);

        $resposta->setStatusCode(201, 'O status está esta funcionando');
//      dd($resposta);
        return $resposta;
    }
}
