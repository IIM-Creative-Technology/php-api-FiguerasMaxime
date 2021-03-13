<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class ApiToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $apiToken = $request->headers->get('api_token');

        $user = User::where('api_token', $apiToken)->get()->first();

        if( !$user instanceof User){
            return response()->json('Unauthorized', 401);
        }

        return $next($request);
    }
}
