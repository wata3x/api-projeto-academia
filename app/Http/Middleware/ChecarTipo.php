<?php

namespace App\Http\Middleware;

use Closure;

class ChecarTipo
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
        if ($request->user() === null) {
            return response("Você não tem permissão", 401);
        }
        $actions = $request->route()->getAction();
        $tipos = isset($actions['tipos']) ? $actions['tipos'] : null;

        if ($request->user()->temAlgumTipo($tipos) || !$tipos) {
            return $next($request);
        }
        return response("Você não tem permissão", 401);
    }
}
