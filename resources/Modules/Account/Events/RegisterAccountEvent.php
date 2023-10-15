<?php

namespace Raid\Core\Modules\Account\Events;

use Raid\Core\Modules\Account\Actions\Auth\RegisterAccountAction;
use Raid\Core\Events\Contracts\EventManagerInterface;
use Raid\Core\Events\EventManager;

class RegisterAccountEvent extends EventManager implements EventManagerInterface
{
    /**
     * {@inheritDoc}
     */
    public const ACTION = RegisterAccountAction::ACTION;

    /**
     * {@inheritDoc}
     */
    public const LISTENERS = [];
}
