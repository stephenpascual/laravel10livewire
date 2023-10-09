<?php

use App\Http\Controllers\Api\V1\Admin\EmployeeApiController;

Route::group(['prefix' => 'v1', 'as' => 'api.', 'middleware' => ['auth:sanctum']], function () {
    // Employee
    Route::apiResource('employees', EmployeeApiController::class);
});
