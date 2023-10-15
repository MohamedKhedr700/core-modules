<?php

namespace Raid\Core\Modules\Account\Models\Enum;

use Raid\Core\Traits\Enum\ConstEnum;

enum LoginColumn: string
{
    use ConstEnum;

    public const DEVICE_ID = 'deviceId';

    public const EMAIL = 'email';

    public const PHONE = 'phone';

    public const EMAIL_OR_PHONE = 'emailOrPhone';
}
