<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProjectController;
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
Route::get('/about', [PageController::class, 'about'])->name('page.about');;
Route::get('/contacts', [PageController::class, 'contacts'])->name('page.contacts');;
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/services', [PageController::class, 'services'])->name('page.services');
// Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/songs', [SongController::class, 'index'])->name('songs.index');
