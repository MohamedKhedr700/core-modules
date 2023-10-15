<?php

namespace Raid\Core\Modules\Device\Http\Gates;

use Raid\Core\Modules\Account\Contracts\AccountInterface;
use Raid\Core\Http\Gates\Contracts\GateInterface;
use Raid\Core\Http\Gates\Gate;
use Raid\Core\Modules\Device\Models\Device;

class DeviceGate extends Gate implements GateInterface
{
    /**
     * Determine whether the user can create a device.
     */
    public function create(AccountInterface $account): bool
    {
        return true;
    }

    /**
     * Determine whether the user can list devices.
     */
    public function list(AccountInterface $account): bool
    {
        return true;
    }

    /**
     * Determine whether the user can find a device.
     */
    public function find(AccountInterface $account, Device $device): bool
    {
        return true;
    }

    /**
     * Determine whether the user can update a device.
     */
    public function update(AccountInterface $account, Device $device): bool
    {
        return true;
    }

    /**
     * Determine whether the user can delete a device.
     */
    public function delete(AccountInterface $account, Device $device): bool
    {
        return true;
    }
}
