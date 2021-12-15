<?php

use App\Http\Controllers\Admin\SongController as AdminSongController;
use App\Http\Controllers\ContactController;
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
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');;
Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');;
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/services', [PageController::class, 'services'])->name('page.services');
// Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/songs', [SongController::class, 'index'])->name('songs.index');

Route::prefix('admin')->group(function(){
    Route::get('/songs', [AdminSongController::class, 'index'])->name('admin.songs.index');
    Route::get('/songs/create', [AdminSongController::class, 'create']);
    Route::post('/songs', [AdminSongController::class, 'store']);
    Route::delete('/songs/{song}', [AdminSongController::class, 'destroy']);
});
