<?php

namespace Raid\Core\Modules\Account\Traits\Auth;

use Laravel\Sanctum\NewAccessToken;

trait Tokenable
{
    /**
     * Generate access token and response with the plain text token and user type.
     */
    public function generateToken(array $permissions = []): array
    {
        $accountType = $this->accountType();

        $accessToken = $this->createUserToken($permissions)->plainTextToken;

        return $this->getTokenResponse($accountType, $accessToken);
    }

    /**
     * Create user token.
     */
    public function createUserToken(array $permissions = []): NewAccessToken
    {
        return $this->createToken(($this->deviceId ?? $this->email ?? $this->phone).'-'.$this->accountType(), $permissions);
    }

    /**
     * Get token response.
     */
    public function getTokenResponse(string $accountType, string $accessToken): array
    {
        return [
            'accountType' => $accountType,
            'accessToken' => $accessToken,
        ];
    }
}
