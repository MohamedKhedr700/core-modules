<?php

namespace Raid\Core\Modules\Device\Http\Requests;

use Raid\Core\Http\Requests\FormRequest;
use Raid\Core\Traits\Request\WithPaginationCommonRules;

class ListDeviceRequest extends FormRequest
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
