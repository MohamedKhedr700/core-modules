<?php

namespace Raid\Core\Modules\Account\Actions\Profile;

use Raid\Core\Modules\Account\Actions\Crud\UpdateAccountAction;
use Raid\Core\Modules\Account\Models\Account;
use Raid\Core\Modules\Account\Repositories\AccountRepository;
use Raid\Core\Actions\Contracts\Profile\UpdateProfileActionInterface;
use Raid\Core\Actions\Profile\UpdateProfileAction;

class UpdateAccountProfileAction extends UpdateProfileAction implements UpdateProfileActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const REPOSITORY = AccountRepository::class;

    /**
     * Create a new action instance.
     */
    public function __construct(
        private readonly UpdateAccountAction $updateAccountAction,
    ) {
    }

    /**
     * {@inheritDoc}
     */
    public function handle(array $data = []): Account
    {
        return $this->updateAccountAction->execute(user()->accountId(), $data);
    }
}
