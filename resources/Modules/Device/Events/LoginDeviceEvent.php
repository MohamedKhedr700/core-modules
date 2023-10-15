<?php

namespace Raid\Core\Modules\Device\Events;

use Raid\Core\Events\Contracts\EventManagerInterface;
use Raid\Core\Events\EventManager;
use Raid\Core\Modules\Device\Actions\Auth\LoginDeviceAction;
use Raid\Core\Modules\Device\Listeners\AddDeviceLocation;

class LoginDeviceEvent extends EventManager implements EventManagerInterface
{
    /**
     * {@inheritDoc}
     */
    public const ACTION = LoginDeviceAction::ACTION;

    /**
     * {@inheritDoc}
     */
    public const LISTENERS = [
        AddDeviceLocation::class,
    ];
}
