<?php

namespace Raid\Core\Modules\Account\Http\Controllers\Application\Auth;

use App\Models\Action\Enum\Action as ActionEnum;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Raid\Core\Modules\Account\Repositories\AccountRepository;
use Raid\Core\Actions\Contracts\Auth\RegisterActionInterface;
use Raid\Core\Http\Controllers\ApiController;

class RegisterController extends ApiController
{
    /**
     * {@inheritdoc}
     */
    public const REPOSITORY = AccountRepository::class;

    /**
     * Register a new account.
     */
    public function registerAccount(Request $request, RegisterActionInterface $registerAction): JsonResponse
    {
        $loginProvider = $registerAction->execute($request->onlyValidated());

        if ($loginProvider->isAuthenticated()) {
            $responseData['authorization'] = $loginProvider->getTokenResponse();
        }

        $responseData['record'] = $this->fractalItem($loginProvider->account(), $this->getTransformer());

        $message = $this->getResponseMessage(ActionEnum::CREATE);

        return $this->success($message, $responseData);
    }
}
