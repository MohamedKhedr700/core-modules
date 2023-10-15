<?php

namespace Raid\Core\Modules\Account\Traits\Request;

use Raid\Core\Modules\Account\Utilities\AccountUtility;

trait WithAccountCommonRules
{
    /**
     * Define common Rules.
     */
    public function commonRules(): array
    {
        return [
            'firstName' => ['required', 'string', 'min:2', 'max:255'],
            'lastName' => ['required', 'string', 'min:2', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'countryCode' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string'],
            'password' => ['string', 'min:8', 'max:16'],
            'passwordConfirmation' => ['required_with:password', 'same:password'],

        ];
    }

    /**
     * Define attributes localization.
     */
    public function attributes(): array
    {
        return [
            'firstName' => AccountUtility::trans('account.firstName'),
            'lastName' => AccountUtility::trans('account.lastName'),
            'email' => AccountUtility::trans('account.email'),
            'countryCode' => AccountUtility::trans('account.countryCode'),
            'phone' => AccountUtility::trans('account.phone'),
            'password' => AccountUtility::trans('account.password'),
            'passwordConfirmation' => AccountUtility::trans('account.passwordConfirmation'),

        ];
    }
}
