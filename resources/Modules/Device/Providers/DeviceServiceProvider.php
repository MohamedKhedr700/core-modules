<?php

namespace Raid\Core\Modules\Device\Providers;

use Raid\Core\Providers\ServiceProvider;
use Raid\Core\Modules\Device\Repositories\DeviceRepository;

class DeviceServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public const REPOSITORY = DeviceRepository::class;
}
