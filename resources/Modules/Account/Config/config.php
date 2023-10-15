<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Module Name
    |--------------------------------------------------------------------------
    */

    'name' => \Modules\Account\Repositories\AccountRepository::module(),

    /*
    |--------------------------------------------------------------------------
    | Module Actions
    |--------------------------------------------------------------------------
    */

    'actions' => [
        \Modules\Account\Actions\Crud\CreateAccountAction::class,
        \Modules\Account\Actions\Crud\ListAccountAction::class,
        \Modules\Account\Actions\Crud\FindAccountAction::class,
        \Modules\Account\Actions\Crud\FindByAccountAction::class,
        \Modules\Account\Actions\Crud\UpdateAccountAction::class,
        \Modules\Account\Actions\Crud\PatchAccountAction::class,
        \Modules\Account\Actions\Crud\DeleteAccountAction::class,
        \Modules\Account\Actions\Auth\LoginAccountAction::class,
        \Modules\Account\Actions\Auth\LoginByAccountAction::class,
        \Modules\Account\Actions\Auth\RegisterAccountAction::class,
        \Modules\Account\Actions\Profile\DeleteAccountProfileAction::class,
        \Modules\Account\Actions\Profile\FindAccountProfileAction::class,
        \Modules\Account\Actions\Profile\UpdateAccountProfileAction::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Module Events
    |--------------------------------------------------------------------------
    */

    'events' => [
        \Modules\Account\Events\CreateAccountEvent::class,
        \Modules\Account\Events\RegisterAccountEvent::class,
        \Modules\Account\Events\LoginAccountEvent::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Module Gates
    |--------------------------------------------------------------------------
    */

    'gates' => [],

    /*
    |--------------------------------------------------------------------------
    | Module Error Codes
    |--------------------------------------------------------------------------
    */

    'error_codes' => [
        'create_fail' => '1000',
        'update_fail' => '1010',
        'delete_fail' => '1020',
        'login_fail' => '1030',
    ],
];
