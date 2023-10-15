<?php

use Illuminate\Support\Facades\Route;
use Raid\Core\Modules\Device\Http\Controllers\Application\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Application API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([
    'prefix' => 'v1/devices',
    'middleware' => ['authenticate-application'],
], function () {
    // Login account
    Route::post('login', [LoginController::class, 'login']);
});
