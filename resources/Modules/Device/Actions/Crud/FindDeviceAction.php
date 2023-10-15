<?php

namespace Raid\Core\Modules\Device\Actions\Crud;

use Raid\Core\Actions\Contracts\Crud\FindActionInterface;
use Raid\Core\Actions\Crud\FindAction;
use Raid\Core\Modules\Device\Repositories\DeviceRepository;

class FindDeviceAction extends FindAction implements FindActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const REPOSITORY = DeviceRepository::class;
}
