<?php

namespace Raid\Core\Modules\Traits\Provider;

trait WithModuleProvider
{
    /**
     * Register config.
     */
    private function registerConfig(): void
    {
        $configResourcePath = glob(__DIR__.'/../../../config/*.php');

        foreach ($configResourcePath as $config) {

            $this->publishes([
                $config => config_path(basename($config)),
            ], 'module-config');
        }
    }

    /**
     * Register commands.
     */
    private function registerCommands(): void
    {
        $this->commands($this->commands);
    }

    /**
     * Register stubs.
     */
    private function registerStubs()
    {
        $stubs = __DIR__.'/../../../resources/stubs/';

        $this->publishes([
            $stubs => app_path('Console/laravel-modules/stubs'),
        ], 'module-stubs');
    }

    /**
     * Register module.
     */
    private function registerModule(): void
    {
    }
}
