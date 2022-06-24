<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\CompanyController;
use \App\Http\Controllers\DepartmentController;

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
    // Users
    Route::get('usuario/listagem', [UserController::class, 'listagem'])->name('usuario.listagem');
    Route::get('usuario/download/{user}', [UserController::class, 'download'])->name('usuario.download');
    Route::resource('usuario', UserController::class);

    // Companies
    Route::resource('empresa', CompanyController::class);

    // Departments
    Route::get('setor/cadastrar', [DepartmentController::class, 'cadastrar'])->name('setor.cadastrar');
    Route::post('setor/cadastrar/store', [DepartmentController::class, 'store'])->name('setor.store');

});

require __DIR__.'/auth.php';
