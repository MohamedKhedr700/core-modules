<?php

namespace Raid\Core\Modules\Device\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Raid\Core\Modules\Account\Contracts\AccountInterface;
use Raid\Core\Modules\Account\Models\Account;
use Raid\Core\Modules\Account\Models\Enum\AccountType;
use Raid\Core\Modules\Admin\Models\Admin;
use Raid\Core\Models\Contracts\ModelInterface;
use Raid\Core\Modules\Device\Models\ModelFilter\DeviceFilter;
use Raid\Core\Modules\User\Models\User;

class Device extends Account implements ModelInterface, AccountInterface, Authenticatable
{
    /**
     * {@inheritdoc}
     */
    public const ACCOUNT_TYPE = AccountType::DEVICE;

    /**
     * {@inheritdoc}
     */
    public const SHARED_ATTRIBUTES = [
        'id', 'device_id', 'device_token', 'device_type', 'ip',
        'agent', 'disabled', 'position',
    ];

    protected string $filter = DeviceFilter::class;

    /**
     * @var array
     */
    protected $fillable = [
        'device_id', 'device_token', 'device_type', 'ip',
        'agent', 'disabled', 'position',
    ];

    /**
     * Get all the accounts that are assigned this device.
     */
    public function accounts(): BelongsToMany
    {
        return $this->belongsToMany(
            Account::class,
            null
        );
    }

    /**
     * Get all the users that are assigned this device.
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(
            User::class,
            null,
            'device_ids',
            'account_ids'
        );
    }

    /**
     * Get all the admins that are assigned this device.
     */
    public function admins(): BelongsToMany
    {
        return $this->belongsToMany(
            Admin::class,
            null,
            'device_ids',
            'account_ids'
        );
    }
}
