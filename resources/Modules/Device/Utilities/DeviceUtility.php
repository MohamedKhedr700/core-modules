<?php

namespace Raid\Core\Modules\Device\Utilities;

use Raid\Core\Utilities\Utility;
use Raid\Core\Modules\Device\Http\Transformers\DeviceTransformer;
use Raid\Core\Modules\Device\Models\Device;
use Raid\Core\Modules\Device\Providers\RouteServiceProvider;
use Raid\Core\Modules\Device\Repositories\Contracts\DeviceRepositoryInterface;
use Raid\Core\Modules\Device\Repositories\DeviceRepository;
use Raid\Core\Modules\Device\Utilities\Contracts\DeviceUtilityInterface;

class DeviceUtility extends Utility implements DeviceUtilityInterface
{
    /**
     * {@inheritdoc}
     */
    public const MODULE_NAME = 'device';

    /**
     * {@inheritdoc}
     */
    public const ROUTE_SERVICE_PROVIDER = RouteServiceProvider::class;

    /**
     * {@inheritdoc}
     */
    public const REPOSITORY = DeviceRepository::class;

    /**
     * {@inheritdoc}
     */
    public const REPOSITORY_INTERFACE = DeviceRepositoryInterface::class;

    /**
     * {@inheritdoc}
     */
    public const MODEL = Device::class;

    /**
     * {@inheritdoc}
     */
    public const TRANSFORMER = DeviceTransformer::class;
}
