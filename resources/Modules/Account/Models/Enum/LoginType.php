<?php

namespace Raid\Core\Modules\Account\Models\Enum;

use Raid\Core\Traits\Enum\ConstEnum;

enum LoginType: string
{
    use ConstEnum;

    public const DEVICE = 'device';

    public const SYSTEM = 'system';

    public const THIRD_PARTY = 'thirdParty';
}
