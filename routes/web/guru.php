<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guru\DashboardController;
use Illuminate\Routing\RouteGroup;

Route::group(['prefix'=>'guru','middleware'=>'auth'],function(){

    Route::get('/', [DashboardController::class, 'index']);

});