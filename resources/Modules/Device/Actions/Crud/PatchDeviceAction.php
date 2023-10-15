<?php

namespace Raid\Core\Modules\Device\Actions\Crud;

use Raid\Core\Actions\Contracts\Crud\PatchActionInterface;
use Raid\Core\Actions\Crud\PatchAction;
use Raid\Core\Modules\Device\Repositories\DeviceRepository;

class PatchDeviceAction extends PatchAction implements PatchActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const REPOSITORY = DeviceRepository::class;
}
