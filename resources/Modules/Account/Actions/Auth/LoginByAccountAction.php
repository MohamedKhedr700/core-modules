<?php

namespace Raid\Core\Modules\Account\Actions\Auth;

use Raid\Core\Modules\Account\Contracts\Login\LoginProviderInterface;
use Raid\Core\Modules\Account\Models\Account;
use Raid\Core\Modules\Account\Repositories\AccountRepository;
use Raid\Core\Modules\Account\Services\Auth\Login\SystemLogin\SystemLoginProvider;
use Raid\Core\Actions\Auth\LoginByAction;
use Raid\Core\Actions\Contracts\Auth\LoginByActionInterface;

class LoginByAccountAction extends LoginByAction implements LoginByActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const REPOSITORY = AccountRepository::class;

    /**
     * Constructor.
     */
    public function __construct(
        private readonly SystemLoginProvider $systemLoginProvider
    ) {
    }

    /**
     * {@inheritDoc}
     */
    public function handle(Account $account): LoginProviderInterface
    {
        return $this->systemLoginProvider->loginByAccount($this->repository(), $account);
    }
}
