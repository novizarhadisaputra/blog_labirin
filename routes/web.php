<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FocusController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TimelineController;

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

Route::get('/', [WelcomeController::class, 'index'])->name('root');
Route::get('/clear-all-cache', function () {
    Artisan::call('optimize:clear');
});
Route::get('/timeline', [TimelineController::class, 'index'])->name('timeline');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/search', [SearchController::class, 'index'])->name('search.index');

Route::prefix('fokus')->group(function () {
    Route::get('/', [FocusController::class, 'index'])->name('fokus.index');
});
Route::resource('kategori', CategoryController::class);
Route::resource('news', NewsController::class);
Route::resource('tag', TagController::class);
