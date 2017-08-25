<?php

namespace AVDPainel\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        switch($guard){
            case 'admin';
                if (Auth::guard($guard)->check()) {
                    if ($request['ajax'] == 1) {
                        return response()
                            ->json(['logged' => true, 'redirect' => url('painel/admin')])
                            ->withCallback($request->input('callback'));
                    }
                    else {
                        return redirect('/painel/admin');
                    }
                }
                break;
            default:
                if (Auth::guard($guard)->check()) {
                    return redirect('/home');
                }
                break;
        }

        return $next($request);
    }
}
