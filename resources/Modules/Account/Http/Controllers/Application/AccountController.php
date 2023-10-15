<?php

namespace Raid\Core\Modules\Account\Http\Controllers\Application;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Raid\Core\Modules\Account\Repositories\AccountRepository;
use Raid\Core\Actions\Contracts\Profile\DeleteProfileActionInterface;
use Raid\Core\Actions\Contracts\Profile\FindProfileActionInterface;
use Raid\Core\Actions\Contracts\Profile\UpdateProfileActionInterface;
use Raid\Core\Http\Controllers\ApiController;

class AccountController extends ApiController
{
    /**
     * {@inheritdoc}
     */
    public const REPOSITORY = AccountRepository::class;

    /**
     * Find account profile.
     */
    public function findAccountProfile(FindProfileActionInterface $findProfileAction): JsonResponse
    {
        $account = $findProfileAction->execute();

        return $this->success('', $this->fractalItem($account, $this->getTransformer()));
    }

    /**
     * Update account profile.
     */
    public function updateAccountProfile(Request $request, UpdateProfileActionInterface $updateProfileAction): JsonResponse
    {
        $updateProfileAction->execute($request->onlyValidated());

        $message = $this->getResponseMessage('update');

        return $this->success($message);
    }

    /**
     * Delete account profile.
     */
    public function deleteAccountProfile(DeleteProfileActionInterface $deleteProfileAction): JsonResponse
    {
        $deleteProfileAction->execute();

        $message = $this->getResponseMessage('delete');

        return $this->success($message);
    }
}
