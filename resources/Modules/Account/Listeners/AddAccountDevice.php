<?php

namespace Raid\Core\Modules\Account\Listeners;

use Raid\Core\Modules\Account\Contracts\Login\LoginProviderInterface;
use Raid\Core\Events\Contracts\EventListenerInterface;

class AddAccountDevice implements EventListenerInterface
{
    /**
     * Handle the event.
     */
    public function handle(LoginProviderInterface $loginProvider): void
    {
        $account = $loginProvider->account();

        if (! $account) {
            return;
        }

        $account->devices()->attach(device()->accountId());
    }
}
