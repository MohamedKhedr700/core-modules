<?php

namespace Raid\Core\Modules\Account\Actions\Crud;

use Raid\Core\Modules\Account\Repositories\AccountRepository;
use Raid\Core\Actions\Contracts\Crud\PatchActionInterface;
use Raid\Core\Actions\Crud\PatchAction;

class PatchAccountAction extends PatchAction implements PatchActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const REPOSITORY = AccountRepository::class;
}
