<?php

namespace Raid\Core\Modules\Account\Services\Auth\Login\DeviceLogin\Manager;

use Raid\Core\Modules\Account\Contracts\AccountInterface;
use Raid\Core\Modules\Account\Contracts\Login\LoginManagerInterface;
use Raid\Core\Modules\Account\Models\Enum\LoginColumn;
use Raid\Core\Modules\Account\Services\Auth\Login\LoginManager;
use Raid\Core\Repositories\Contracts\RepositoryInterface;

class DeviceIdLoginManager extends LoginManager implements LoginManagerInterface
{
    /**
     * @const string
     */
    public const COLUMN = LoginColumn::DEVICE_ID;

    /**
     * {@inheritdoc}
     */
    public function fetchUser(RepositoryInterface $repository, array $credentials): ?AccountInterface
    {
        $device = parent::fetchUser($repository, $credentials);

        return $device ? $repository->update($device->accountId(), $credentials) : $repository->create($credentials);
    }
}
