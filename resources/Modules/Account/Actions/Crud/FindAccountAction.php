<?php

namespace Raid\Core\Modules\Account\Actions\Crud;

use Raid\Core\Modules\Account\Repositories\AccountRepository;
use Raid\Core\Actions\Contracts\Crud\FindActionInterface;
use Raid\Core\Actions\Crud\FindAction;

class FindAccountAction extends FindAction implements FindActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const REPOSITORY = AccountRepository::class;
}
