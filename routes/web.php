<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;

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

Route::view('/dashboard', 'dashboard')->middleware(['auth'])->name('dashboard');


Route::group(['middleware' => 'CheckType:master', 'prefix' => 'master'], function(){
    Route::get('usuario/listagem', [UserController::class, 'listagem'])->name('usuario.listagem');
    Route::get('usuario/download/{id}', [UserController::class, 'download'])->name('usuario.download');
    Route::resource('usuario', UserController::class);
});


require __DIR__.'/auth.php';
