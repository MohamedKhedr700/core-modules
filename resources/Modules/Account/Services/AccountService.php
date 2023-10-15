<?php

namespace Raid\Core\Modules\Account\Services;

use Raid\Core\Modules\Account\Repositories\AccountRepository;
use Raid\Core\Services\ApiService;
use Raid\Core\Services\Contracts\ServiceInterface;

class AccountService extends ApiService implements ServiceInterface
{
    /**
     * {@inheritdoc}
     */
    public const REPOSITORY = AccountRepository::class;
}
