<?php

namespace Raid\Core\Modules\Account\Http\Transformers;

use Raid\Core\Modules\Account\Models\Account;
use Raid\Core\Http\Transformers\Transformer;

class AccountTransformer extends Transformer
{
    /**
     * Transform the account entity.
     */
    public function transform(Account $model): array
    {
        return [
            'id' => (string) $model->getId(),
            'name' => (string) $model->attribute('name'),
            'firstName' => (string) $model->attribute('first_name'),
            'lastName' => (string) $model->attribute('last_name'),
            'email' => (string) $model->attribute('email'),
            'phone' => (string) $model->attribute('phone'),
            'accountType' => (string) $model->attribute('account_type'),
            'isDisabled' => (bool) $model->attribute('is_disabled', false),
            'isVerified' => (bool) $model->attribute('is_verified', false),
            'isActive' => (bool) $model->attribute('is_active', false),
        ];
    }
}
