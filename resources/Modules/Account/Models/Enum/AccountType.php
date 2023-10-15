<?php

namespace Raid\Core\Modules\Account\Models\Enum;

use Raid\Core\Traits\Enum\ConstEnum;

enum AccountType: string
{
    use ConstEnum;

    public const DEVICE = 'device';

    public const ADMIN = 'admin';

    public const USER = 'user';
}
