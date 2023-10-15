<?php

namespace Raid\Core\Modules\Account\Http\Controllers\Application\Auth;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Raid\Core\Modules\Account\Repositories\AccountRepository;
use Raid\Core\Actions\Contracts\Auth\LoginActionInterface;
use Raid\Core\Http\Controllers\ApiController;

class LoginController extends ApiController
{
    /**
     * {@inheritdoc}
     */
    public const REPOSITORY = AccountRepository::class;

    /**
     * Login account.
     */
    public function loginAccount(Request $request, LoginActionInterface $loginAction): JsonResponse
    {
        $credentials = $request->onlyValidated();

        $loginProvider = $loginAction->execute($credentials);

        if ($loginProvider->errors()->any()) {
            return $this->badRequest($loginProvider->errors()->first(), $loginProvider->errors()->toArray());
        }

        if ($loginProvider->isAuthenticated()) {
            $responseData['authorization'] = $loginProvider->getTokenResponse();
        }

        $responseData['record'] = $this->fractalItem($loginProvider->account(), $this->getTransformer());

        return $this->success('', $responseData);
    }
}
