<?php

namespace Raid\Core\Modules\Account\Actions\Crud;

use Raid\Core\Modules\Account\Repositories\AccountRepository;
use Raid\Core\Actions\Contracts\Crud\ListActionInterface;
use Raid\Core\Actions\Crud\ListAction;

class ListAccountAction extends ListAction implements ListActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const REPOSITORY = AccountRepository::class;
}
