<?php

Route::get("login", "AuthController@login");
Route::get("logout", "AuthController@logout");

Route::group(['middleware' => ['auth.admin']], function () {
    Route::get("/", "HomeController@index");

    Route::resource("admins", "AdminController");
    Route::resource("roles", "RoleController");
    Route::resource("permissions", "PermissionController");
    Route::resource("files", "FileController");

    Route::resource("estates", "EstateController");
    Route::resource("users", "UserController");
    Route::resource("devices", "DeviceController");

    Route::get('classes/{model}', 'ClassController@index');
    Route::get('classes/{model}/list', 'ClassController@getList');
    Route::post('classes/{model}', 'ClassController@store');
});