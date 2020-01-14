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

Route::middleware('auth:api')->group(function () {

    Route::apiResource('parts', PartController::class);

    Route::apiResource('staff', StaffController::class);

    Route::apiResource('enquiries', EnquiryController::class);

    Route::put('orders/confirm/{order}', 'OrderController@confirm');
    Route::put('orders/receive/{order}', 'OrderController@receive');
    Route::get('orders/backorders', 'OrderController@backorders');
    Route::apiResource('orders', OrderController::class);

    Route::apiResource('manufacturers', PartManufacturerController::class);

    Route::apiResource('models', PartModelController::class);

    Route::get('companies/dt', 'CompanyController@datatables');
    Route::apiResource('companies', CompanyController::class);

    Route::get('suppliers/dt', 'SupplierController@datatables');
    Route::apiResource('suppliers', SupplierController::class);

    Route::apiResource('categories', CategoryController::class);

    Route::apiResource('receipts', ReceiptController::class);

    Route::apiResource('customers', CustomerController::class);

    Route::get('vehicles/customer/{customer}', 'VehicleController@customerIndex');
    Route::apiResource('vehicles', VehicleController::class);

    Route::get('trash', 'InventoryBinController@index');
    Route::post('trash', 'InventoryBinController@restore');

});

