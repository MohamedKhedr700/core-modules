<?php

namespace Raid\Core\Modules\Device\Actions\Auth;

use Raid\Core\Modules\Account\Contracts\Login\LoginProviderInterface;
use Raid\Core\Modules\Account\Services\Auth\Login\DeviceLogin\DeviceLoginProvider;
use Raid\Core\Actions\Auth\LoginAction;
use Raid\Core\Actions\Contracts\Auth\LoginActionInterface;
use Raid\Core\Modules\Device\Repositories\DeviceRepository;

class LoginDeviceAction extends LoginAction implements LoginActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const REPOSITORY = DeviceRepository::class;

    /**
     * Constructor.
     */
    public function __construct(
        private readonly DeviceLoginProvider $deviceLoginProvider,
    ) {
    }

    /**
     * {@inheritDoc}
     */
    public function handle(array $credentials): LoginProviderInterface
    {
        return $this->deviceLoginProvider->login($this->repository(), $credentials);
    }
}
