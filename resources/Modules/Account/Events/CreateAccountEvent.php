<?php

namespace Raid\Core\Modules\Account\Events;

use Raid\Core\Modules\Account\Actions\Crud\CreateAccountAction;
use Raid\Core\Events\Contracts\EventManagerInterface;
use Raid\Core\Events\EventManager;

class CreateAccountEvent extends EventManager implements EventManagerInterface
{
    /**
     * {@inheritDoc}
     */
    public const ACTION = CreateAccountAction::ACTION;

    /**
     * {@inheritDoc}
     */
    public const LISTENERS = [];
}
