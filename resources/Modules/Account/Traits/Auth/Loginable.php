<?php

namespace Raid\Core\Modules\Account\Traits\Auth;

use Raid\Core\Modules\Account\Exceptions\Login\LoginException;

trait Loginable
{
    /**
     * Check if an account is active to login and authenticated.
     * Throw login exceptions if failed login.
     */
    public function isLoginActive(): bool
    {
        //        if (! $this->attribute('published')) {
        //            throw new LoginException('not published');
        //        }

        return true;
    }
}
