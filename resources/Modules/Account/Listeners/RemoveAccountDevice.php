<?php

namespace Raid\Core\Modules\Account\Listeners;

use Raid\Core\Modules\Account\Contracts\AccountInterface;
use Raid\Core\Traits\Event\Queueable;

class RemoveAccountDevice
{
    use Queueable;

    /**
     * Handle the event.
     */
    public function handle(AccountInterface $account): void
    {
        $account->devices()->detach($account->currentDeviceId());
    }
}
