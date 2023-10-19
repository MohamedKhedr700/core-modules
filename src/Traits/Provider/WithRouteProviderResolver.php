<?php

namespace Raid\Core\Modules\Traits\Provider;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;
use Modules\Core\Providers\ServiceProvider;

trait WithRouteProviderResolver
{
    /**
     * Module service provider.
     */
    public const SERVICE_PROVIDER = ServiceProvider::class;

    /**
     * Get service provider.
     */
    public static function getServiceProvider(): string
    {
        return static::SERVICE_PROVIDER;
    }

    /**
     * Get module name.
     */
    public function getModuleName(): string
    {
        $serviceProvider = static::getServiceProvider();

        return $serviceProvider::getModule(true);
    }

    /**
     * Get module name space.
     */
    public function getModuleNameSpace(): string
    {
        return Config::get('modules.namespace').'\\'.$this->getModuleName().'\\Http\\Controllers';
    }

    /**
     * Get module route path.
     */
    public function getModuleRoutePath(): string
    {
        return module_path($this->getModuleName(), 'Routes');
    }

    /**
     * Define the "api" routes for the Application.
     *
     * These routes are typically stateless.
     */
    protected function mapApiRoutes(): void
    {
        $apiRouteFiles = glob($this->getModuleRoutePath().'/*/*api.php');

        foreach ($apiRouteFiles as $apiRouteFile) {
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->getModuleNameSpace())
                ->group($apiRouteFile);
        }
    }

    /**
     * Define the "web" routes for the Application.
     *
     * These routes all receive session state, CSRF protection, etc.
     */
    protected function mapWebRoutes(): void
    {
        $webRouteFiles = glob($this->getModuleRoutePath().'/*/*web.php');

        foreach ($webRouteFiles as $webRouteFile) {
            Route::middleware('web')
                ->namespace($this->getModuleNameSpace())
                ->group($webRouteFile);
        }
    }
}
