<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Access\AuthorizationException;

/**
 * @details This middleware is used to authenticate the request by checking the X-Secret header.
 */
final class XSecretMiddleware
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
        /** @var array<int, string> $validSecrets */
        $validSecrets = explode(',', config('services.api_gateway_secrets'));

        if (in_array($request->header('X-Secret'), $validSecrets)) {
            return $next($request);
        }

        throw new AuthorizationException('Unauthorized: Invalid API gateway secret.');
    }
}
