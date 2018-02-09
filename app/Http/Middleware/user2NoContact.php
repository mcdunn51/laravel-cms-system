<?php

namespace App\Http\Middleware;

use Closure;

class user2NoContact
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
        
        $user = $request-> user();

        if ($user && $user->name != 'user2'){

            return $next($request);

        }

        dd('No access for user #2');

        // abort(404, 'No access for user #2');
        
    }
}
