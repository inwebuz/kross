<?php

use App\Http\Controllers\Admin\PageController as AdminPageController;
use App\Http\Controllers\Admin\SettingController as AdminSettingController;
use App\Http\Controllers\Admin\SongController as AdminSongController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SongController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', [PageController::class, 'home'])->name('page.home');;
Route::get('about', [PageController::class, 'about'])->name('page.about');;
Route::get('contacts', [ContactController::class, 'index'])->name('contacts.index');;
Route::post('contacts', [ContactController::class, 'store'])->name('contacts.store');;
Route::get('projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('services', [PageController::class, 'services'])->name('page.services');
// Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('songs', [SongController::class, 'index'])->name('songs.index');

Route::get('login', [LoginController::class, 'create'])->name('login');
Route::post('login', [LoginController::class, 'store']);

// Route::get('register', [RegisterController::class, 'create'])->name('register');
// Route::post('register', [RegisterController::class, 'store']);

Route::group(['as' => 'admin.', 'middleware' => ['auth'], 'prefix' => 'admin'], function(){
    Route::get('/', [AdminPageController::class, 'dashboard'])->name('dashboard');
    Route::resource('songs', AdminSongController::class);
    Route::resource('pages', AdminPageController::class);
    Route::resource('settings', AdminSettingController::class);
});

Route::post('logout', [LoginController::class, 'destroy'])->middleware(['auth'])->name('logout');
