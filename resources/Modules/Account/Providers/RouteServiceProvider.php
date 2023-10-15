<?php

namespace Raid\Core\Modules\Account\Providers;

use Raid\Core\Providers\RouteServiceProvider as BaseRouteServiceProvider;

class RouteServiceProvider extends BaseRouteServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public const SERVICE_PROVIDER = AccountServiceProvider::class;
}
