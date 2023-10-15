<?php

namespace Raid\Core\Modules\Account\Actions\Profile;

use Raid\Core\Modules\Account\Actions\Crud\FindAccountAction;
use Raid\Core\Modules\Account\Models\Account;
use Raid\Core\Modules\Account\Repositories\AccountRepository;
use Raid\Core\Actions\Contracts\Profile\FindProfileActionInterface;
use Raid\Core\Actions\Profile\FindProfileAction;

class FindAccountProfileAction extends FindProfileAction implements FindProfileActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const REPOSITORY = AccountRepository::class;

    /**
     * Create a new action instance.
     */
    public function __construct(
        private readonly FindAccountAction $findAccountAction,
    ) {
    }

    /**
     * {@inheritDoc}
     */
    public function handle(): Account
    {
        return $this->findAccountAction->execute(user()->accountId());
    }
}
