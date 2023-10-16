<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Routing\RouteGroup;

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

    Route::get('/', [DashboardController::class, 'index']);

});