<?php

namespace Raid\Core\Modules\Account\Actions\Crud;

use Raid\Core\Modules\Account\Repositories\AccountRepository;
use Raid\Core\Actions\Contracts\Crud\DeleteActionInterface;
use Raid\Core\Actions\Crud\DeleteAction;

class DeleteAccountAction extends DeleteAction implements DeleteActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const REPOSITORY = AccountRepository::class;
}
