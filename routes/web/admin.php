<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\jurusanController;
use Illuminate\Routing\RouteGroup;

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/jurusan', [jurusanController::class, 'index']);

});