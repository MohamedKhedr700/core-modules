<?php

namespace Raid\Core\Modules\Account\Http\Requests;

use Raid\Core\Modules\Account\Traits\Request\WithAccountCommonRules;
use Raid\Core\Http\Requests\FormRequest;

class RegisterAccountRequest extends FormRequest
{
    use WithAccountCommonRules;

    /**
     * {@inheritdoc}
     */
    public function rules(): array
    {
        return $this->withCommonRules();
    }
}
