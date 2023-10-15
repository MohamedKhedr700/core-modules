<?php

namespace Raid\Core\Modules\Account\Events;

use Raid\Core\Modules\Account\Actions\Auth\LoginAccountAction;
use Raid\Core\Events\Contracts\EventManagerInterface;
use Raid\Core\Events\EventManager;

class LoginAccountEvent extends EventManager implements EventManagerInterface
{
    /**
     * {@inheritDoc}
     */
    public const ACTION = LoginAccountAction::ACTION;

    /**
     * {@inheritDoc}
     */
    public const LISTENERS = [];
}
