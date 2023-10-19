<?php

namespace Raid\Core\Modules\Traits\Provider;

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
     * Register config.
     */
    protected function registerConfig(): void
    {
        $repositoryConfigPath = module_path(static::getModule(true), 'Config/config.php');

        $this->publishes([
            $repositoryConfigPath => config_path(static::getModule().'.php'),
        ], 'config');

        $this->mergeConfigFrom(
            $repositoryConfigPath,
            static::getModule()
        );
    }

    /**
     * Register translations.
     */
    public function registerTranslations(): void
    {
        $langPath = module_path(static::getModule(true), 'Resources/lang');

        $this->loadTranslationsFrom($langPath, static::getModule(true));
        $this->loadJsonTranslationsFrom($langPath);
    }

    /**
     * Register views.
     */
    public function registerViews(): void
    {
        $moduleNameLower = static::getModule();

        $viewPath = resource_path('views/modules/'.$moduleNameLower);

        $sourcePath = module_path(static::getModule(true), 'Resources/views');

        $this->publishes([
            $sourcePath => $viewPath,
        ], ['views', $moduleNameLower.'-module-views']);

        $this->loadViewsFrom(array_merge($this->getPublishableViewPaths(), [$sourcePath]), $moduleNameLower);
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
            if (is_dir($path.'/modules/'.static::getModule())) {
                $paths[] = $path.'/modules/'.static::getModule();
            }
        }

        return $paths;
    }
}
