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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index'])->name('bitacora');

Route::group(['middleware' => 'auth'], function() {
Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');
Route::post('/users', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
Route::get('/users/{user}', [App\Http\Controllers\UserController::class, 'show'])->name('users.show');
Route::get('/users/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
Route::delete('/users/{user}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.delete');

Route::resource('permissions', App\Http\Controllers\PermissionController::class);
Route::resource('roles', App\Http\Controllers\RoleController::class);
Route::resource('cargos', App\Http\Controllers\CargoController::class);
Route::resource('departamentos', App\Http\Controllers\DepartamentoController::class);
Route::resource('tipos', App\Http\Controllers\TipoController::class);

Route::resource('carpetas', App\Http\Controllers\CarpetaController::class);
Route::resource('documentos', App\Http\Controllers\DocumentoController::class);
Route::resource('etiquetas', App\Http\Controllers\EtiquetaController::class);
Route::resource('explorador', App\Http\Controllers\ExploradorController::class);
Route::post('/documentos/upload', [App\Http\Controllers\DocumentoController::class, 'upload'])->name('documentos.upload');
Route::get('/{uuid}/download', 'App\Http\Controllers\DownloadMediaController@download'); 

});