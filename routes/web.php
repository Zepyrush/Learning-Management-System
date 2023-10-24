<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('login');
// });
Route::get('/', [AuthController::class, 'login'])->name('login') ;
Route::post('/', [AuthController::class, 'authenticate'])->name('login');
Route::get('/logout',[AuthController::class, 'logout'])->middleware('auth');


foreach(File::allFiles(__DIR__.'/web')as $routeFile) require $routeFile->getPathname();