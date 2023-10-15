<?php

namespace Raid\Core\Modules\Account\Actions\Auth;

use Raid\Core\Modules\Account\Repositories\AccountRepository;
use Raid\Core\Actions\Auth\LogoutAction;
use Raid\Core\Actions\Contracts\Auth\LogoutActionInterface;

class LogoutAccountAction extends LogoutAction implements LogoutActionInterface
{
    /**
     * {@inheritdoc}
     */
    public const REPOSITORY = AccountRepository::class;
}
