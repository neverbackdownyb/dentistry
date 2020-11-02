<?php

use App\Repositories\CategoryRepository;
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
})->name('page.home');
Route::get('category', function () {
    return view('welcome');
})->name('page.category');

Route::get('home', function () {
    $categories = app(CategoryRepository::class)->getCategoryShowMenu();

    return view('client.page.home',
        ['banner'=> collect([]), 'titlePage' =>"Trang chủ", 'categories' => $categories, 'highlightCategories'=>collect([])]);
});
Auth::routes();

