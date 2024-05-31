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
    return view('mytheme.index');
});


Route::group(['middleware' => 'role:administrator'], function() {
    Route::get('/dashboard', function() {
        return 'Добро пожаловать, Веб-разработчик';
    });
});

Route::get('/catalog/{code}', [App\Http\Controllers\CategoryController::class, 'categoryByCode'])->name('catalog.detail');
Route::get('/catalog', [App\Http\Controllers\CategoryController::class, 'category'])->name('category');
Auth::routes();
