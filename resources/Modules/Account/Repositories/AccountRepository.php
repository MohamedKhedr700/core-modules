<?php

namespace Raid\Core\Modules\Account\Repositories;

use Raid\Core\Modules\Account\Repositories\Contracts\AccountRepositoryInterface;
use Raid\Core\Modules\Account\Utilities\AccountUtility;
use Raid\Core\Repositories\ApiRepository;

class AccountRepository extends ApiRepository implements AccountRepositoryInterface
{
    /**
     * {@inheritdoc}
     */
    public const UTILITY = AccountUtility::class;
}
