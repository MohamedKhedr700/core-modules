<?php

namespace Raid\Core\Modules\Device\Repositories;

use Raid\Core\Repositories\ApiRepository;
use Raid\Core\Modules\Device\Repositories\Contracts\DeviceRepositoryInterface;
use Raid\Core\Modules\Device\Utilities\DeviceUtility;

class DeviceRepository extends ApiRepository implements DeviceRepositoryInterface
{
    /**
     * {@inheritdoc}
     */
    public const UTILITY = DeviceUtility::class;
}
