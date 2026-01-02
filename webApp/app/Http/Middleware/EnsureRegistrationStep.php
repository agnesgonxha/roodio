<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureRegistrationStep
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $step): Response
    {
        $steps = [
            'otp'     => 'user_verification_passed',
            'account' => 'otp_passed',
        ];

        if (! isset($steps[$step]) || ! session()->has($steps[$step])) {
            return redirect()->route('register');
        }

        return $next($request);
    }
}
