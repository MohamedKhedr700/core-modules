<?php

namespace Raid\Core\Modules\Device\Http\Requests;

use Raid\Core\Http\Requests\FormRequest;
use Raid\Core\Modules\Device\Traits\Request\WithDeviceCommonRules;

class UpdateDeviceRequest extends FormRequest
{
    use WithDeviceCommonRules;

    /**
     * {@inheritdoc}
     */
    public function rules(): array
    {
        return [
            'disabled' => ['required', 'sometimes', 'boolean'],
        ];
    }
}
