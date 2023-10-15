<?php

namespace Raid\Core\Modules\Account\Http\Controllers\Application\Auth;

use Illuminate\Http\JsonResponse;
use Raid\Core\Modules\Account\Repositories\AccountRepository;
use Raid\Core\Actions\Contracts\Auth\LogoutActionInterface;
use Raid\Core\Http\Controllers\ApiController;

class LogoutController extends ApiController
{
    /**
     * {@inheritdoc}
     */
    public const REPOSITORY = AccountRepository::class;

    /**
     * Logout account.
     */
    public function logoutAccount(LogoutActionInterface $logoutAction): JsonResponse
    {
        $logoutAction->execute();

        return $this->success();
    }
}
