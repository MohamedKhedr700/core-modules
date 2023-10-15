<?php

namespace Raid\Core\Modules\Account\Actions\Auth;

use Raid\Core\Modules\Account\Contracts\Login\LoginProviderInterface;
use Raid\Core\Modules\Account\Repositories\AccountRepository;
use Raid\Core\Modules\Account\Services\Auth\Login\SystemLogin\SystemLoginProvider;
use Raid\Core\Actions\Auth\LoginAction;
use Raid\Core\Actions\Contracts\Auth\LoginActionInterface;

class LoginAccountAction extends LoginAction implements LoginActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const REPOSITORY = AccountRepository::class;

    /**
     * Constructor.
     */
    public function __construct(
        private readonly SystemLoginProvider $systemLoginProvider,
    ) {
    }

    /**
     * {@inheritDoc}
     */
    public function handle(array $credentials): LoginProviderInterface
    {
        return $this->systemLoginProvider->login($this->repository(), $credentials);
    }
}
