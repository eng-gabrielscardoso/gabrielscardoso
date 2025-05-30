<?php

use App\Http\Middleware\SecurityHeaders;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        if (getenv('APP_ENV') === 'production') {
            $middleware->trustHosts(at: explode(',', env('TRUST_PROXIES', '')));
            $middleware->trustProxies(at: explode(',', env('TRUST_HOSTS', '')));
        } else {
            $middleware->trustHosts(at: ['laravel.test']);
            $middleware->trustProxies(at: '*');
        }

        $middleware->append([
            SecurityHeaders::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
