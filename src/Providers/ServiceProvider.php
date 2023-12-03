<?php

namespace Raid\Core\Modules\Providers;

use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;
use Raid\Core\Modules\Traits\Provider\WithModule;
use Raid\Core\Modules\Traits\Provider\WithProviderHelper;
use Raid\Core\Modules\Traits\Provider\WithProviderResolver;
use Raid\Core\Modules\Traits\Provider\WithRepository;
use Raid\Core\Modules\Traits\Provider\WithRouteServiceProvider;

class ServiceProvider extends IlluminateServiceProvider
{
    use WithProviderResolver;
    use WithRepository;
    use WithRouteServiceProvider;

    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->registerConfig();

        $this->registerTranslations();

        $this->registerViews();

        $this->registerModule();

        $this->registerRouteServiceProvider();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->loadMigrationsFrom(module_path(static::getModule(true), 'Database/migrations'));
    }

    /**
     * Get the services provided by the provider.
     */
    public function provides(): array
    {
        return [];
    }
}
