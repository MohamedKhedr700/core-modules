<?php

namespace Raid\Core\Modules\Account\Traits\Auth\Provider;

use Raid\Core\Modules\Account\Contracts\Login\LoginManagerInterface;

trait WithManager
{
    /**
     * Login manager instance.
     */
    protected LoginManagerInterface $loginManager;

    /**
     * Get login type managers.
     */
    public static function getLoginTypeManagers(): array
    {
        return config('login.managers.'.static::loginType());
    }

    /**
     * {@inheritDoc}
     */
    public function setLoginManager(LoginManagerInterface $loginManager): void
    {
        $this->loginManager = $loginManager;
    }

    /**
     * {@inheritDoc}
     */
    public function loginManager(): LoginManagerInterface
    {
        return $this->loginManager;
    }

    /**
     * Get login manager by login type.
     */
    public function setLoginManagerByType(array $credentials = []): ?LoginManagerInterface
    {
        $loginManager = $this->getLoginManagerByType($credentials);

        if (! $loginManager) {
            return null;
        }

        $loginManager = new $loginManager();

        $this->setLoginManager($loginManager);

        return $loginManager;
    }

    /**
     * Get login manager by login type.
     */
    private function getLoginManagerByType(array $credentials = []): ?string
    {
        $managers = static::getLoginTypeManagers();

        foreach ($managers as $manager) {
            if (empty($credentials[$manager::getColumn()])) {
                continue;
            }

            return $manager;
        }

        return null;
    }
}
