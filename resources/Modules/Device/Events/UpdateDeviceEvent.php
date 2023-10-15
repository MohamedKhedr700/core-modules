<?php

namespace Raid\Core\Modules\Device\Events;

use Raid\Core\Events\Contracts\EventManagerInterface;
use Raid\Core\Events\EventManager;
use Raid\Core\Modules\Device\Actions\Crud\UpdateDeviceAction;

class UpdateDeviceEvent extends EventManager implements EventManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public const ACTION = UpdateDeviceAction::ACTION;

    /**
     * {@inheritdoc}
     */
    public const LISTENERS = [];
}
