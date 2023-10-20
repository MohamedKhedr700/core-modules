<?php

namespace Raid\Core\Modules\Traits\Provider;

trait WithRouteServiceProvider
{
    /**
     * Module route service provider.
     */
    public const ROUTE_SERVICE_PROVIDER = '';

    /**
     * Get module route service provider.
     */
    public static function routeServiceProvider(): string
    {
        return static::ROUTE_SERVICE_PROVIDER;
    }
}