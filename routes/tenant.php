<?php

Route::get("login", "LoginController@showLoginForm");

Route::group(['middleware' => ['auth.tenant', 'web']], function () {
    Route::get("/", "HomeController@index");
    Route::resource("devices", "DeviceController");
});