<?php

namespace Raid\Core\Modules\Account\Utilities;

use Raid\Core\Modules\Account\Http\Transformers\AccountTransformer;
use Raid\Core\Modules\Account\Models\Account;
use Raid\Core\Modules\Account\Providers\RouteServiceProvider;
use Raid\Core\Modules\Account\Repositories\AccountRepository;
use Raid\Core\Modules\Account\Repositories\Contracts\AccountRepositoryInterface;
use Raid\Core\Modules\Account\Utilities\Contracts\AccountUtilityInterface;
use Raid\Core\Utilities\Utility;

class AccountUtility extends Utility implements AccountUtilityInterface
{
    /**
     * {@inheritdoc}
     */
    public const MODULE_NAME = 'account';

    /**
     * {@inheritdoc}
     */
    public const ROUTE_SERVICE_PROVIDER = RouteServiceProvider::class;

    /**
     * {@inheritdoc}
     */
    public const REPOSITORY = AccountRepository::class;

    /**
     * {@inheritdoc}
     */
    public const REPOSITORY_INTERFACE = AccountRepositoryInterface::class;

    /**
     * {@inheritdoc}
     */
    public const MODEL = Account::class;

    /**
     * {@inheritdoc}
     */
    public const TRANSFORMER = AccountTransformer::class;
}
