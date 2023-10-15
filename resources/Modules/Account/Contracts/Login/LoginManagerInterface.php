<?php

namespace Raid\Core\Modules\Account\Contracts\Login;

use Raid\Core\Modules\Account\Contracts\AccountInterface;
use Raid\Core\Repositories\Contracts\RepositoryInterface;

interface LoginManagerInterface
{
    /**
     * Get column name.
     */
    public static function getColumn(): string;

    /**
     * Fetch user with login manager if exists.
     */
    public function fetchUser(RepositoryInterface $repository, array $credentials): ?AccountInterface;
}
