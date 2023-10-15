<?php

namespace Raid\Core\Modules\Account\Traits\Auth;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Raid\Core\Modules\Device\Models\Device;

trait Relationable
{
    /**
     * Get all the devices for the account.
     */
    public function devices(): BelongsToMany
    {
        return $this->belongsToMany(
            Device::class,
            null,
            'account_ids',
            'device_ids'
        );
    }
}
