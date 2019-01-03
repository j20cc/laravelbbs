<?php

namespace App\Http\Middleware;

use Closure;

class CheckEmailVerified
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
        if (!$request->user()->email_verified) {
            if ($request->expectsJson()) {
                return response()->json(['message'=>'请先验证邮箱'], 400);
            }

            return redirect()->route('email-verify-notice');
        }
        return $next($request);
    }
}
