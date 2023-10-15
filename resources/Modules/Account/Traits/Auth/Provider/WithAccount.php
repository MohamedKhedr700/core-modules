<?php

namespace Raid\Core\Modules\Account\Traits\Auth\Provider;

use Raid\Core\Modules\Account\Contracts\AccountInterface;
use Raid\Core\Modules\Device\Models\Device;

trait WithAccount
{
    /**
     * Account instance.
     */
    protected ?AccountInterface $account = null;

    /**
     * Authenticated account flag.
     */
    protected bool $authenticated = false;

    /**
     * Set account model if found.
     */
    public function setAccount(AccountInterface $account = null): void
    {
        $this->account = $account;
    }

    /**
     * Get an account model.
     */
    public function account(string $key = null, mixed $default = null): mixed
    {
        return $key ? ($this->account->{$key} ?? $default) : $this->account;
    }

    /**
     * Attach the current device to the account.
     */
    public function attachDevice(AccountInterface $account, ?Device $device): void
    {
        if (! $device) {
            return;
        }

        $account->devices()->attach($device->accountId());
    }

    /**
     * Determine if an account is found.
     */
    public function accountFound(): bool
    {
        return ! empty($this->account);
    }

    /**
     * Determine if an account is authenticated.
     */
    public function isAuthenticated(): bool
    {
        return $this->authenticated;
    }
}
