<?php

namespace Raid\Core\Modules\Account\Actions\Crud;

use Raid\Core\Modules\Account\Repositories\AccountRepository;
use Raid\Core\Actions\Contracts\Crud\FindByActionInterface;
use Raid\Core\Actions\Crud\FindByAction;

class FindByAccountAction extends FindByAction implements FindByActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const REPOSITORY = AccountRepository::class;
}
