<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, string $autentic_method, string $profile)
    {
//         echo $autentic_method;
        echo $autentic_method . ' - ' . $profile . '<br>';
        if ($autentic_method === 'padrao') {
            echo 'buscar usuario no banco<br>';
        } elseif ($autentic_method === 'ldap') {
            echo 'buscar usuario no AD';
        } else {
            echo 'method não detectado<br>';
        }

        if ($profile === 'visitante') {
            echo 'show alguma telas <br>';
        } else {
            echo 'show telas <br>';
        }

        //  return $next($request);
        if (false) {
            return $next($request);
        } else {
            return Response('Access Negado, rota Exige autenticacao');
        }
    }
}
