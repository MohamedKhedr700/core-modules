<?php

namespace Raid\Core\Modules\Account\Actions\Auth;

use Exception;
use Raid\Core\Modules\Account\Actions\Crud\CreateAccountAction;
use Raid\Core\Modules\Account\Contracts\Login\LoginProviderInterface;
use Raid\Core\Modules\Account\Repositories\AccountRepository;
use Raid\Core\Modules\Account\Services\Auth\Login\SystemLogin\SystemLoginProvider;
use Raid\Core\Actions\Auth\RegisterAction;
use Raid\Core\Actions\Contracts\Auth\RegisterActionInterface;

class RegisterAccountAction extends RegisterAction implements RegisterActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const REPOSITORY = AccountRepository::class;

    /**
     * Constructor.
     */
    public function __construct(
        private readonly CreateAccountAction $createAccountAction,
        private readonly SystemLoginProvider $systemLoginProvider,
    ) {
    }

    /**
     * {@inheritDoc}
     *
     * @throws Exception
     */
    public function handle(array $data): LoginProviderInterface
    {
        $account = $this->createAccountAction->execute($data);

        return $this->systemLoginProvider->loginByAccount($this->repository(), $account);
    }
}
