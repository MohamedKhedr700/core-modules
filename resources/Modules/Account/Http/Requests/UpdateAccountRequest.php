<?php

namespace Raid\Core\Modules\Account\Http\Requests;

use Raid\Core\Modules\Account\Traits\Request\WithAccountCommonRules;
use Raid\Core\Http\Requests\FormRequest;

class UpdateAccountRequest extends FormRequest
{
    use WithAccountCommonRules;

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return $this->withCommonRules([
            'firstname' => ['sometimes'],
            'lastname' => ['sometimes'],
            'email' => ['sometimes'],
            'phone' => ['sometimes'],
            'countryCode' => ['sometimes'],
            'password' => ['sometimes'],
            'passwordConfirmation' => ['required_with:password'],
        ]);
    }
}
