<?php

namespace App\Http\Middleware;

use App\Events\UserLoggedInEvent;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;

class LogUserLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        if (auth()->check()) {
            Event::dispatch(new UserLoggedInEvent(auth()->user()));
        }

        return $response;
    }
}
