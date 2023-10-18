<?php

namespace Raid\Core\Modules\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Raid\Core\Modules\Traits\Provider\WithRouteProviderResolver;

class RouteServiceProvider extends ServiceProvider
{
    use WithRouteProviderResolver;

    /**
     * Called before routes are registered.
     *
     * Register any model bindings or pattern-based filters.
     */
    public function boot(): void
    {
        parent::boot();
    }

    /**
     * Define the routes for the application.
     */
    public function map(): void
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();
    }
}
