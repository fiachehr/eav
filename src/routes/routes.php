<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web','auth','authorization','time.access']], function () {

});

Route::group(['middleware' => ['web','auth']], function () {

});
