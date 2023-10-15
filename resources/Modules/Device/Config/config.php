<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Module Name
    |--------------------------------------------------------------------------
    */

    'name' => \Modules\Device\Repositories\DeviceRepository::module(),

    /*
    |--------------------------------------------------------------------------
    | Module Actions
    |--------------------------------------------------------------------------
    */

    'actions' => [
        \Modules\Device\Actions\Crud\ListDeviceAction::class,
        \Modules\Device\Actions\Crud\FindDeviceAction::class,
        \Modules\Device\Actions\Crud\FindByDeviceAction::class,
        \Modules\Device\Actions\Crud\UpdateDeviceAction::class,
        \Modules\Device\Actions\Crud\DeleteDeviceAction::class,
        \Modules\Device\Actions\Auth\LoginDeviceAction::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Module Events
    |--------------------------------------------------------------------------
    */

    'events' => [
        Modules\Device\Events\LoginDeviceEvent::class,
        Modules\Device\Events\UpdateDeviceEvent::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Module Gates
    |--------------------------------------------------------------------------
    */

    'gates' => [
        \Modules\Device\Http\Gates\DeviceGate::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Module Error Codes
    |--------------------------------------------------------------------------
    */

    'error_codes' => [
        'create_fail' => '2000',
        'update_fail' => '2010',
        'delete_fail' => '2020',
        'login_fail' => '2030',
    ],
];
