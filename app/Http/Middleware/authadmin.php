<?php

namespace gilvanturismo\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class authadmin
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
        if (Auth::guard('admin')->guest()) {
            return redirect('/portal27')->withErrors(['errors' => 'É preciso fazer login!']);
        }
        return $next($request);
    }
}
