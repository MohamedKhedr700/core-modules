<?php

namespace Raid\Core\Modules\Traits\Provider;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\Facades\Config;

trait WithProviderResolver
{
    /**
     * Register route service provider.
     */
    public function registerRouteServiceProvider(): void
    {
        $routeServiceProvider = static::getRouteServiceProvider();

        if (empty($routeServiceProvider)) {
            return;
        }

        $this->app->register($routeServiceProvider);
    }

    /**
     * Register translations.
     */
    public function registerTranslations(): void
    {
        $langPath = module_path(static::getModuleNameUpper(), 'Resources/lang');

        $this->loadTranslationsFrom($langPath, static::getModuleNameUpper());
        $this->loadJsonTranslationsFrom($langPath);
    }

    /**
     * Register config.
     */
    protected function registerConfig(): void
    {
        $this->publishes([
            module_path(static::getModuleNameUpper(), 'Config/config.php') => config_path(static::getModuleNameLower().'.php'),
        ], 'config');

        $this->mergeConfigFrom(
            module_path(static::getModuleNameUpper(), 'Config/config.php'),
            static::getModuleNameLower()
        );
    }

    /**
     * Register views.
     */
    public function registerViews(): void
    {
        $viewPath = resource_path('views/modules/'.static::getModuleNameLower());

        $sourcePath = module_path(static::getModuleNameUpper(), 'Resources/views');

        $this->publishes([
            $sourcePath => $viewPath,
        ], ['views', static::getModuleNameLower().'-module-views']);

        $this->loadViewsFrom(array_merge($this->getPublishableViewPaths(), [$sourcePath]), $this->getModuleNameLower());
    }

    /**
     * Register module.
     */
    protected function registerModule(): void
    {
        $this->registerRepository();
    }

    /**
     * Register module repository.
     */
    protected function registerRepository(): void
    {
        $repository = static::repository();

        $this->app->singleton($repository, function () use ($repository) {
            return new $repository(new (static::getModel()));
        });
    }

    /**
     * Get published view paths.
     */
    private function getPublishableViewPaths(): array
    {
        $paths = [];

        foreach (Config::get('view.paths') as $path) {
            if (is_dir($path.'/modules/'.static::getModuleNameLower())) {
                $paths[] = $path.'/modules/'.static::getModuleNameLower();
            }
        }

        return $paths;
    }
}
