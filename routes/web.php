<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\Admin\NewsController;
Route::controller(NewsController::class)->prefix('admin')->group(function() {
   Route::get('news/create','add'); 
});

// 3
use App\Http\Controllers\AAAController;
Route::controller(AAAController::class)->group(function() {
    Route::get('AAAController', 'bbb');
});

// 4
use App\Http\Controller\Admin\ProfileController;
Route::Controller(ProfileController::class)->group(function() {
    Route::get('admin/profile/create','add');
    Route::get('admin/profaile/edit','edit');
});