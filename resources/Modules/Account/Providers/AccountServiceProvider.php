<?php

namespace Raid\Core\Modules\Account\Providers;

use Raid\Core\Modules\Account\Repositories\AccountRepository;
use Raid\Core\Providers\ServiceProvider;

class AccountServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public const REPOSITORY = AccountRepository::class;
}
