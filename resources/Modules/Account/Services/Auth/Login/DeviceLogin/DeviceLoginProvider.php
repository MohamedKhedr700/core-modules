<?php

namespace Raid\Core\Modules\Account\Services\Auth\Login\DeviceLogin;

use Raid\Core\Modules\Account\Contracts\Login\LoginProviderInterface;
use Raid\Core\Modules\Account\Models\Enum\LoginType;
use Raid\Core\Modules\Account\Services\Auth\Login\LoginProvider;

class DeviceLoginProvider extends LoginProvider implements LoginProviderInterface
{
    /**
     * {@inheritdoc}
     */
    public const LOGIN_TYPE = LoginType::DEVICE;
}
