<?php

namespace Raid\Core\Modules\Account\Services\Auth\Login;

use Raid\Core\Modules\Account\Contracts\AccountInterface;
use Raid\Core\Modules\Account\Contracts\Login\LoginProviderInterface;
use Raid\Core\Modules\Account\Exceptions\Login\LoginException;
use Raid\Core\Modules\Account\Traits\Auth\Provider\WithAccount;
use Raid\Core\Modules\Account\Traits\Auth\Provider\WithCredentials;
use Raid\Core\Modules\Account\Traits\Auth\Provider\WithErrors;
use Raid\Core\Modules\Account\Traits\Auth\Provider\WithManager;
use Raid\Core\Modules\Account\Traits\Auth\Provider\WithRepository;
use Raid\Core\Modules\Account\Traits\Auth\Provider\WithToken;
use Raid\Core\Repositories\Contracts\RepositoryInterface;

abstract class LoginProvider implements LoginProviderInterface
{
    use WithAccount,
        WithCredentials,
        WithErrors,
        WithManager,
        WithRepository,
        WithToken;

    /**
     * Login type.
     */
    public const LOGIN_TYPE = '';

    /**
     * Get a login type.
     */
    public static function loginType(): string
    {
        return static::LOGIN_TYPE;
    }

    /**
     * Attempt Login.
     */
    public function login(RepositoryInterface $repository, array $credentials): LoginProviderInterface
    {
        $this->setRepository($repository);

        $this->setCredentials($credentials);

        $loginManager = $this->setLoginManagerByType($credentials);

        if (! $loginManager) {
            $this->errors()->add('error', trans('auth.login_type_not_found'));

            return $this;
        }

        $account = $loginManager->fetchUser($repository, $credentials);

        if (! $account) {
            $this->errors()->add('error', trans('auth.not_found'));

            return $this;
        }

        if (! $this->checkLoginProviderRules($account, $credentials)) {
            return $this;
        }

        $this->setAccount($account);

        if (! $this->checkActiveLoginRules($account)) {
            return $this;
        }

        $this->authenticateAccount($account);

        return $this;
    }

    /**
     * Login with given user.
     */
    public function loginByAccount(RepositoryInterface $repository, AccountInterface $account): LoginProviderInterface
    {
        $this->setRepository($repository);

        $this->setAccount($account);

        if ($this->checkActiveLoginRules($account)) {
            $this->authenticateAccount($this->account());
        }

        return $this;
    }

    /**
     * Check active user login based on a model.
     * Method `isLoginActive` found in a user model to control login check.
     * Base method in Accountable trait.
     */
    public function checkActiveLoginRules(AccountInterface $user): bool
    {
        try {
            $user->isLoginActive();
        } catch (LoginException $exception) {
            $this->errors()->add('error', $exception->getMessage());

            return false;
        }

        return true;
    }

    /**
     * Authenticate account.
     */
    public function authenticateAccount(AccountInterface $account): void
    {
        $this->setToken($account->createUserToken());

        $this->attachDevice($account, device());

        //        authenticate_user($account);

        $this->authenticated = true;
    }

    /**
     * Check login provider rules after fetch user.
     */
    public function checkLoginProviderRules(AccountInterface $user, array $credentials = []): bool
    {
        return true;
    }
}
