<?php

namespace Raid\Core\Modules\Account\Actions\Profile;

use Raid\Core\Modules\Account\Actions\Crud\DeleteAccountAction;
use Raid\Core\Modules\Account\Repositories\AccountRepository;
use Raid\Core\Actions\Contracts\Profile\DeleteProfileActionInterface;
use Raid\Core\Actions\Profile\DeleteProfileAction;

class DeleteAccountProfileAction extends DeleteProfileAction implements DeleteProfileActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const REPOSITORY = AccountRepository::class;

    /**
     * Create a new action instance.
     */
    public function __construct(
        private readonly DeleteAccountAction $deleteAccountAction,
    ) {
    }

    /**
     * {@inheritDoc}
     */
    public function handle(): bool
    {
        return $this->deleteAccountAction->execute(user()->accountId());
    }
}
