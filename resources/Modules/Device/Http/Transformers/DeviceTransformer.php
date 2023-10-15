<?php

namespace Raid\Core\Modules\Device\Http\Transformers;

use Raid\Core\Http\Transformers\Transformer;
use Raid\Core\Modules\Device\Models\Device;

class DeviceTransformer extends Transformer
{
    /**
     * Transform the device entity.
     */
    public function transform(Device $model): array
    {
        return [
            'id' => (string) $model->getId(),
            'deviceId' => (string) $model->attribute('device_id'),
            'deviceToken' => (string) $model->attribute('device_token'),
            'deviceType' => (string) $model->attribute('device_type'),
            'ip' => (string) $model->attribute('ip'),
            'agent' => (string) $model->attribute('agent'),
            'disabled' => (bool) $model->attribute('disabled', false),
            'accountType' => (string) $model->attribute('account_type'),
        ];
    }
}
