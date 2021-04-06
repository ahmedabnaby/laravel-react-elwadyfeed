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

Route::resource('dawagens', App\Http\Controllers\DawagensCRUDController::class)->middleware('auth');
Route::resource('masheyas', App\Http\Controllers\MasheyasCRUDController::class)->middleware('auth');

Route::get('/elwady-admin', function() {
    return view('auth.login');
})->name('login');


Auth::routes();


Route::get('/register', function() {
 return abort(404);
});

Route::post('/register', function() {
 return abort(404);
});

Auth::routes([
    'register' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
