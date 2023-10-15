<?php

namespace Raid\Core\Modules\Account\Traits\Auth;

use Raid\Core\Models\Model;
use Raid\Core\Modules\Device\Models\Device;

trait Deviceable
{
    /**
     * Get the current device id for the account.
     */
    public function currentDeviceId(): ?string
    {
        return $this->currentAccessToken()->deviceId();
    }

    /**
     * Get the current device for the account.
     */
    public function currentDevice(): ?Device
    {
        return $this->devices()->where(Model::primaryKey(), $this->currentDeviceId())->first();
    }
}
