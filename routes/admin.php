<?php

Route::group(['middleware' => ['auth.admin']], function () {
    Route::get("/", "HomeController@index");
    Route::resource("admins", "AdminController");
    Route::resource("roles", "RoleController");
    Route::resource("permissions", "PermissionController");

    Route::resource("estates", "EstateController");
    Route::resource("users", "UserController");
    Route::resource("devices", "DeviceController");
});