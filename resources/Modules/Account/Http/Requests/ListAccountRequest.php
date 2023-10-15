<?php

namespace Raid\Core\Modules\Account\Http\Requests;

use Raid\Core\Http\Requests\FormRequest;
use Raid\Core\Traits\Request\WithPaginationCommonRules;

class ListAccountRequest extends FormRequest
{
    use WithPaginationCommonRules;

    /**
     * {@inheritdoc}
     */
    public function rules(): array
    {
        return $this->withCommonRules();
    }
}
