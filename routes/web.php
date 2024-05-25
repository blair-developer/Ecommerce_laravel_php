<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\adminController;

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

route::get('/',[HomeController::class,'index']);

route::get('/view_category',[adminController::class,'view_category']);

route::post('/add_category',[adminController::class,'add_category']);

route::get('/delete_category/{id}',[adminController::class,'delete_category']);

route::get('/view_product',[adminController::class,'view_product']);

route::post('/add_product',[adminController::class,'add_product']);

route::get('/show_product',[adminController::class,'show_product']);

route::get('/delete_product/{id}',[adminController::class,'delete_product']);

route::get('/update_product/{id}',[adminController::class,'update_product']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

 route::get('/redirect',[HomeController::class,'redirect']);
});
