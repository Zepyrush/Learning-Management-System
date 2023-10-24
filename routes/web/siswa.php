<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Siswa\DashboardController;
use Illuminate\Routing\RouteGroup;

Route::group(['prefix'=>'siswa','middleware'=>'auth'],function(){

    Route::get('/', [DashboardController::class, 'index']);

});