<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Auth::routes();

Route::get('suppliers/dt', 'SupplierController@datatables');
Route::get('companies/dt', 'CompanyController@datatables');

Route::middleware('auth:api')->group(function () {

    Route::apiResource('parts', PartController::class);

    Route::apiResource('enquiries', EnquiryController::class);

    Route::apiResource('orders', OrderController::class);

    Route::apiResource('manufacturers', PartManufacturerController::class);

    Route::apiResource('models', PartModelController::class);

    Route::apiResource('companies', CompanyController::class);

    Route::apiResource('suppliers', SupplierController::class);

});


