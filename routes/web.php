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

Route::get('/auth/redirect/{provider}', [\App\Http\Controllers\SocialController::class, 'redirect'])->name('home');
Route::get('/callback/{provider}', [\App\Http\Controllers\SocialController::class, 'callback'])->name('home');

Route::post('/foo', function () {
    dd(23232);
    echo 1;
    return;
});
Auth::routes();

