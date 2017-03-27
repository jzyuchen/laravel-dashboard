<?php

Route::group(['middleware' => ['auth.admin', 'role:Administrators']], function () {
    Route::get("/", "HomeController@index");
    Route::resource("roles", "RoleController");
    Route::resource("admins", "AdminController");
    Route::resource("permissions", "PermissionController");

    Route::resource("estates", "EstateController");
    Route::resource("users", "UserController");
    Route::resource("devices", "DeviceController");
});