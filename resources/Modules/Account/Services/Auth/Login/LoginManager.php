<?php

namespace Raid\Core\Modules\Account\Services\Auth\Login;

use Illuminate\Support\Str;
use Raid\Core\Modules\Account\Contracts\AccountInterface;
use Raid\Core\Modules\Account\Contracts\Login\LoginManagerInterface;
use Raid\Core\Repositories\Contracts\RepositoryInterface;

abstract class LoginManager implements LoginManagerInterface
{
    /**
     * @const string
     */
    public const COLUMN = '';

    /**
     * {@inheritDoc}
     */
    public static function getColumn(): string
    {
        return static::COLUMN;
    }

    /**
     * {@inheritDoc}
     */
    public function fetchUser(RepositoryInterface $repository, array $credentials): ?AccountInterface
    {
        $filters = [Str::snake(static::COLUMN) => $credentials[static::COLUMN]];

        return $repository->findBy($filters);
    }
}
