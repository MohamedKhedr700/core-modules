<?php

namespace Raid\Core\Modules\Device\Actions\Crud;

use Raid\Core\Actions\Contracts\Crud\UpdateActionInterface;
use Raid\Core\Actions\Crud\UpdateAction;
use Raid\Core\Modules\Device\Repositories\DeviceRepository;

class UpdateDeviceAction extends UpdateAction implements UpdateActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const REPOSITORY = DeviceRepository::class;
}
