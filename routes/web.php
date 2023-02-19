<?php

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'nama' => 'Kawan Koding'
    ]);
});

// Route::controller(UserController::class)->prefix('user')->group(function () {
//     Route::get('/','index')->name('index');
//     Route::get('create', 'create')->name('userCreate');
//     Route::post('/', 'store')->name('store');
//     Route::get('{id}/edit', 'edit')->name('edit');
//     Route::put('{id}', 'update')->name('update');
//     Route::delete('{id}', 'destroy')->name('destroy');
// });

Route::resource('user', UserController::class);
