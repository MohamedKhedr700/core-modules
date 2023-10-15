<?php

namespace Raid\Core\Modules\Account\Services\Auth\Login\SystemLogin\Manager;

use Raid\Core\Modules\Account\Contracts\Login\LoginManagerInterface;
use Raid\Core\Modules\Account\Models\Enum\LoginColumn;
use Raid\Core\Modules\Account\Services\Auth\Login\LoginManager;

class EmailOrPhoneLoginManager extends LoginManager implements LoginManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public const COLUMN = LoginColumn::EMAIL_OR_PHONE;
}
