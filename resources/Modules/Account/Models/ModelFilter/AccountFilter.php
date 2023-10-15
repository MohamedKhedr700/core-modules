<?php

namespace Raid\Core\Modules\Account\Models\ModelFilter;

use Raid\Core\Modules\Account\Services\Auth\Login\SystemLogin\Manager\EmailLoginManager;
use Raid\Core\Modules\Account\Services\Auth\Login\SystemLogin\Manager\PhoneLoginManager;
use Raid\Core\Models\Filter\ModelFilter;

class AccountFilter extends ModelFilter
{
    /**
     * Filter accounts by given phone.
     */
    public function email(string $email): ModelFilter
    {
        return $this->where('email', $email);
    }

    /**
     * Filter accounts by given phone.
     */
    public function phone(string $phone): ModelFilter
    {
        return $this->where('fullPhone', $phone);
    }

    /**
     * Filter accounts by given phone.
     */
    public function emailOrPhone(string $emailOrPhone): ModelFilter
    {
        $column = filter_var($emailOrPhone, FILTER_VALIDATE_EMAIL) ? EmailLoginManager::COLUMN : PhoneLoginManager::COLUMN;

        return $this->where($column, $emailOrPhone);
    }

    /**
     * Filter accounts by given device ID.
     */
    public function deviceId(string $deviceId): ModelFilter
    {
        return $this->where('deviceId', $deviceId);
    }
}
