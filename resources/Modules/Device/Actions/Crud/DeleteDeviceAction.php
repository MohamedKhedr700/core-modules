<?php

namespace Raid\Core\Modules\Device\Actions\Crud;

use Raid\Core\Actions\Contracts\Crud\DeleteActionInterface;
use Raid\Core\Actions\Crud\DeleteAction;
use Raid\Core\Modules\Device\Repositories\DeviceRepository;

class DeleteDeviceAction extends DeleteAction implements DeleteActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const REPOSITORY = DeviceRepository::class;
}
