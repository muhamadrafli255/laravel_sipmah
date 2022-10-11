<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AddressController;
use App\Http\Controllers\API\DataTableController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'namespace' => 'API',
], function(){
    Route::group([
        'prefix' => 'datatables',
    ], function(){
        Route::get('/members', [DataTableController::class, 'getMembers']);
    });
});

Route::group([
    'namespace' => 'API',
], function(){
    Route::group([
        'prefix' => 'datatables',
    ], function(){
        Route::get('/officers', [DataTableController::class, 'getOfficers']);
    });
});
