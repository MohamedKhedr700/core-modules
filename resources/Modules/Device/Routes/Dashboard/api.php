<?php

use Illuminate\Support\Facades\Route;
use Raid\Core\Modules\Device\Http\Controllers\Dashboard\DeviceController;

/*
|--------------------------------------------------------------------------
| Dashboard API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([
    'prefix' => 'v1/dashboard/devices',
    'middleware' => ['auth:admin'],
], function () {
    // store account
    Route::post('/', [DeviceController::class, 'store']);
    // list accounts
    Route::get('/', [DeviceController::class, 'list']);
    // show account
    Route::get('{id}', [DeviceController::class, 'show']);
    // update account
    Route::put('{id}', [DeviceController::class, 'update']);
    // delete account
    Route::delete('{id}', [DeviceController::class, 'delete']);
});
