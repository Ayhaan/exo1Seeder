<?php

use App\Http\Controllers\UtilisateurController;
use App\Models\Utilisateur;
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
    return view('home'); //allController
})->name('home');

//back
Route::get('/admin', function () {
    return view('admin.admin');
})->name('admin');


//Back partie users
    //index
Route::get('/admin/users', [UtilisateurController::class, 'index'])->name('users.index');
    //show
Route::get('/admin/users/{id}/show', [UtilisateurController::class, 'show'])->name('users.show');

    //delete
Route::delete('/admin/users/{id}/delete', [UtilisateurController::class, 'destroy'])->name('users.delete');
Route::get('/admin/users/deleteAll', [UtilisateurController::class, 'destroyAll'])->name('users.deleteAll');

    //create - store
Route::get('/admin/users/create', [UtilisateurController::class, 'create'])->name('users.create');
Route::post('/admin/users/store', [UtilisateurController::class, 'store'])->name('users.store');

    //edit - update
Route::get('/admin/users/{id}/edit', [UtilisateurController::class, 'edit'])->name('users.edit');
Route::put('/admin/users/{id}/update', [UtilisateurController::class, 'update'])->name('users.update');
