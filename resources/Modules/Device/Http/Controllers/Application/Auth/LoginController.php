<?php

namespace Raid\Core\Modules\Device\Http\Controllers\Application\Auth;

use Illuminate\Http\JsonResponse;
use Raid\Core\Modules\Account\Http\Controllers\Application\Auth\LoginController as AccountLoginController;
use Raid\Core\Modules\Device\Actions\Auth\LoginDeviceAction;
use Raid\Core\Modules\Device\Http\Requests\LoginDeviceRequest;
use Raid\Core\Modules\Device\Repositories\DeviceRepository;

class LoginController extends AccountLoginController
{
    /**
     * {@inheritdoc}
     */
    public const REPOSITORY = DeviceRepository::class;

    /**
     * Device login.
     */
    public function login(LoginDeviceRequest $request, LoginDeviceAction $loginDeviceAction): JsonResponse
    {
        return parent::loginAccount($request, $loginDeviceAction);
    }
}
