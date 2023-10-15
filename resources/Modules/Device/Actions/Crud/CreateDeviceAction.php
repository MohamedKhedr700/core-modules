<?php

namespace Raid\Core\Modules\Device\Actions\Crud;

use Raid\Core\Actions\Contracts\Crud\CreateActionInterface;
use Raid\Core\Actions\Crud\CreateAction;
use Raid\Core\Modules\Device\Repositories\DeviceRepository;

class CreateDeviceAction extends CreateAction implements CreateActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const REPOSITORY = DeviceRepository::class;
}
