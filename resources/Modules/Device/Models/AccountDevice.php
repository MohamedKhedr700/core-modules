<?php

namespace Raid\Core\Modules\Device\Models;

use Raid\Core\Models\Contracts\ModelInterface;
use Raid\Core\Models\Model;

class AccountDevice extends Model implements ModelInterface
{
    /**
     * {@inheritdoc}
     */
    protected $fillable = [
        'device_id', 'accountable_id', 'accountable_type',
    ];
}
