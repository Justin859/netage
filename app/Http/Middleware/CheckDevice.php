<?php

namespace App\Http\Middleware;

use Jenssegers\Agent\Agent;
use Closure;

class CheckDevice
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
        $agent = new Agent();

        if(! $agent->isMobile())
        {
            return redirect('https://www.netage.co.za');
        }

        return $next($request);
    }
}
