<?php

namespace Raid\Core\Modules\Account\Services\Auth\Login\SystemLogin;

use Raid\Core\Modules\Account\Contracts\AccountInterface;
use Raid\Core\Modules\Account\Contracts\Login\LoginProviderInterface;
use Raid\Core\Modules\Account\Models\Enum\LoginType;
use Raid\Core\Modules\Account\Services\Auth\Login\LoginProvider;

class SystemLoginProvider extends LoginProvider implements LoginProviderInterface
{
    /**
     * {@inheritdoc}
     */
    public const LOGIN_TYPE = LoginType::SYSTEM;

    /**
     * {@inheritdoc}
     */
    public function checkLoginProviderRules(AccountInterface $user, array $credentials = []): bool
    {
        if (! $user->isMatchingPassword($credentials['password'] ?? '')) {
            $this->errors()->add('error', trans('auth.not_found'));

            return false;
        }

        return true;
    }
}
