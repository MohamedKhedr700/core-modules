<?php

namespace Raid\Core\Modules\Device\Http\Controllers\Application;

use Raid\Core\Http\Controllers\ApiController;
use Raid\Core\Modules\Device\Repositories\DeviceRepository;

class DeviceController extends ApiController
{
    /**
     * {@inheritdoc}
     */
    public const REPOSITORY = DeviceRepository::class;
}
