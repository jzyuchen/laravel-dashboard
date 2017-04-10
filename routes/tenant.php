<?php

Route::auth();

Route::group(['middleware' => ['web', 'auth.tenant']], function () {
    Route::get("/", "HomeController@index");
    Route::resource("devices", "DeviceController");
});