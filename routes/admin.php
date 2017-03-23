<?php

Route::group(['middleware' => 'auth.admin'], function () {
    Route::get("/", "HomeController@index");
    Route::resource("estates", "EstateController");
    Route::resource("users", "UserController");
    Route::resource("devices", "DeviceController");
});