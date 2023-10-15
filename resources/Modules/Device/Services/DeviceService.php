<?php

namespace Raid\Core\Modules\Device\Services;

use Raid\Core\Services\ApiService;
use Raid\Core\Services\Contracts\ServiceInterface;
use Raid\Core\Modules\Device\Repositories\DeviceRepository;

class DeviceService extends ApiService implements ServiceInterface
{
    /**
     * {@inheritdoc}
     */
    public const REPOSITORY = DeviceRepository::class;
}
