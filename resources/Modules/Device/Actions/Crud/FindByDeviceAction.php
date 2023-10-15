<?php

namespace Raid\Core\Modules\Device\Actions\Crud;

use Raid\Core\Actions\Contracts\Crud\FindByActionInterface;
use Raid\Core\Actions\Crud\FindByAction;
use Raid\Core\Modules\Device\Repositories\DeviceRepository;

class FindByDeviceAction extends FindByAction implements FindByActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const REPOSITORY = DeviceRepository::class;
}
