<?php

use Illuminate\Support\Facades\Route;
use Raid\Core\Modules\Account\Http\Controllers\Dashboard\AccountController;

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
    'prefix' => 'v1/dashboard/accounts',
    'middleware' => ['auth:admin'],
], function () {
    // store account
    Route::post('/', [AccountController::class, 'store']);
    // list accounts
    Route::get('/', [AccountController::class, 'list']);
    // show account
    Route::get('{id}', [AccountController::class, 'show']);
    // update account
    Route::put('{id}', [AccountController::class, 'update']);
    // patch account
    Route::patch('{id}', [AccountController::class, 'patch']);
    // delete account
    Route::delete('{id}', [AccountController::class, 'delete']);
});
