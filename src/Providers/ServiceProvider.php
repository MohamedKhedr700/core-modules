<?php

namespace Raid\Core\Modules\Providers;

use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;
use Raid\Core\Modules\Traits\Provider\WithProviderHelper;
use Raid\Core\Modules\Traits\Provider\WithProviderResolver;

class ServiceProvider extends IlluminateServiceProvider
{
    use WithProviderHelper;
    use WithProviderResolver;

    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->registerRouteServiceProvider();

        $this->registerConfig();

        $this->registerTranslations();

        $this->registerViews();

        $this->registerModule();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->loadMigrationsFrom(module_path(static::getModuleNameUpper(), 'Database/Migrations'));
    }

    /**
     * Get the services provided by the provider.
     */
    public function provides(): array
    {
        return [];
    }
}
