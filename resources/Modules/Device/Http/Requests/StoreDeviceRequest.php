<?php

namespace Raid\Core\Modules\Device\Http\Requests;

use Raid\Core\Http\Requests\FormRequest;
use Raid\Core\Modules\Device\Traits\Request\WithDeviceCommonRules;

class StoreDeviceRequest extends FormRequest
{
    use WithDeviceCommonRules;

    /**
     * {@inheritdoc}
     */
    public function rules(): array
    {
        return $this->withCommonRules();
    }
}
