<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array<int, class-string|string>
     */
    protected $middleware = [
        // Trust proxy headers
        \App\Http\Middleware\TrustProxies::class,

        // Handle CORS
        \Illuminate\Http\Middleware\HandleCors::class,

        // Prevent requests during maintenance mode
        \App\Http\Middleware\PreventRequestsDuringMaintenance::class,

        // Validate post size
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,

        // Trim whitespace from strings
        \App\Http\Middleware\TrimStrings::class,

        // Convert empty strings to null
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array<string, array<int, class-string|string>>
     */
    protected $middlewareGroups = [
        'web' => [
            // Encrypt cookies
            \App\Http\Middleware\EncryptCookies::class,

            // Add queued cookies to the response
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,

            // Start session
            \Illuminate\Session\Middleware\StartSession::class,

            // Share session errors with views
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,

            // CSRF protection
            \App\Http\Middleware\VerifyCsrfToken::class,

            // Substitute bindings in routes
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],

        'api' => [
            // API request rate throttling
            'throttle:api',

            // Substitute bindings in routes
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array<string, class-string|string>
     */
    protected $routeMiddleware = [
        // Authenticate users
        'auth' => \App\Http\Middleware\Authenticate::class,

        // Authenticate with basic HTTP authentication
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,

        // Cache headers
        'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,

        // Authorize users
        'can' => \Illuminate\Auth\Middleware\Authorize::class,

        // Handle guest users
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,

        // Password confirmation
        'password.confirm' => \Illuminate\Auth\Middleware\RequirePassword::class,

        // Throttle requests
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,

        // Validate signed routes
        'signed' => \Illuminate\Routing\Middleware\ValidateSignature::class,

        // Role-based access control middleware
        //'role' => \App\Http\Middleware\RoleMiddleware::class, // Custom role middleware
    ];
}
