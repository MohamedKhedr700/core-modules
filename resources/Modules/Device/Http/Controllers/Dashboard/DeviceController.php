<?php

namespace Raid\Core\Modules\Device\Http\Controllers\Dashboard;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\JsonResponse;
use Raid\Core\Exceptions\UnvalidatedRequestException;
use Raid\Core\Http\Controllers\ApiController;
use Raid\Core\Modules\Device\Actions\Crud\DeleteDeviceAction;
use Raid\Core\Modules\Device\Actions\Crud\FindDeviceAction;
use Raid\Core\Modules\Device\Actions\Crud\ListDeviceAction;
use Raid\Core\Modules\Device\Actions\Crud\PatchDeviceAction;
use Raid\Core\Modules\Device\Actions\Crud\UpdateDeviceAction;
use Raid\Core\Modules\Device\Http\Requests\ListDeviceRequest;
use Raid\Core\Modules\Device\Http\Requests\UpdateDeviceRequest;
use Raid\Core\Modules\Device\Models\Device;
use Raid\Core\Modules\Device\Repositories\DeviceRepository;

class DeviceController extends ApiController
{
    /**
     * {@inheritdoc}
     */
    public const REPOSITORY = DeviceRepository::class;

    /**
     * List devices.
     *
     * @throws AuthorizationException|UnvalidatedRequestException
     */
    public function list(ListDeviceRequest $request, ListDeviceAction $indexDeviceAction): JsonResponse
    {
        return parent::listResources($request, $indexDeviceAction);
    }

    /**
     * Show device.
     *
     * @throws AuthorizationException
     */
    public function show(Device $id, FindDeviceAction $findDeviceAction): JsonResponse
    {
        return parent::showResource($id, $findDeviceAction);
    }

    /**
     * Update device.
     *
     * @throws AuthorizationException|UnvalidatedRequestException
     */
    public function update(UpdateDeviceRequest $request, Device $id, UpdateDeviceAction $updateDeviceAction): JsonResponse
    {
        return parent::updateResource($request, $id, $updateDeviceAction);
    }

    /**
     * Patch device.
     *
     * @throws AuthorizationException|UnvalidatedRequestException
     */
    public function patch(UpdateDeviceRequest $request, Device $id, PatchDeviceAction $patchDeviceAction): JsonResponse
    {
        return parent::patchResource($request, $id, $patchDeviceAction);
    }

    /**
     * Delete device.
     *
     * @throws AuthorizationException
     */
    public function delete(Device $id, DeleteDeviceAction $deleteDeviceAction): JsonResponse
    {
        return parent::deleteResource($id, $deleteDeviceAction);
    }
}
