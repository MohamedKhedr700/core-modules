<?php

namespace Raid\Core\Modules\Device\Traits\Request;

trait WithDeviceCommonRules
{
    /**
     * Define common Rules.
     */
    public function commonRules(): array
    {
        return [
            'deviceId' => ['required', 'string'],
            'deviceToken' => ['required', 'string'],
            'deviceType' => ['required', 'string'],
            'agent' => ['nullable', 'string'],
        ];
    }

    /**
     * Define attributes localization.
     */
    public function attributes(): array
    {
        return [];
    }
}
