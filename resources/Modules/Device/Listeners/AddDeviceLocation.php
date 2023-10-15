<?php

namespace Raid\Core\Modules\Device\Listeners;

use Raid\Core\Modules\Account\Contracts\Login\LoginProviderInterface;
use Raid\Core\Events\Contracts\EventListenerInterface;
use Raid\Core\Traits\Event\Queueable;
use Raid\Core\Modules\Device\Actions\Crud\UpdateDeviceAction;
use Raid\Core\Modules\Device\Models\Device;
use Stevebauman\Location\Facades\Location;
use Stevebauman\Location\Position;

class AddDeviceLocation implements EventListenerInterface
{
    use Queueable;

    /**
     * Update device action.
     */
    private UpdateDeviceAction $updateDeviceAction;

    /**
     * Constructor.
     */
    public function __construct(UpdateDeviceAction $updateDeviceAction)
    {
        $this->updateDeviceAction = $updateDeviceAction;
    }

    /**
     * Add device location on login device event.
     */
    public function handle(LoginProviderInterface $loginProvider): void
    {
        $device = $loginProvider->account();

        if (! $device) {
            return;
        }

        $this->addDeviceIpLocation($device);
    }

    /**
     * Add device IP location.
     */
    private function addDeviceIpLocation(Device $device): void
    {
        $ip = request()->ip();

        $position = $this->getDeviceIpLocation($ip);

        $this->updateDeviceLocation($device, $ip, $position);
    }

    /**
     * Get device location based on IP.
     */
    private function getDeviceIpLocation(?string $ip): ?Position
    {
        if (! $ip) {
            return null;
        }

        $position = Location::get($ip);

        if (! $position) {
            return null;
        }

        return $position;
    }

    /**
     * Update device location.
     */
    private function updateDeviceLocation(Device $device, ?string $ip, ?Position $position): void
    {
        $this->updateDeviceAction->execute($device, [
            'ip' => $ip,
            'position' => $position,
        ]);
    }
}
