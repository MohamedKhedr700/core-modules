<?php

namespace Raid\Core\Modules\Device\Actions\Crud;

use Raid\Core\Actions\Contracts\Crud\ListActionInterface;
use Raid\Core\Actions\Crud\ListAction;
use Raid\Core\Modules\Device\Repositories\DeviceRepository;

class ListDeviceAction extends ListAction implements ListActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const REPOSITORY = DeviceRepository::class;
}
