<?php

use App\Http\Controllers\TiketsController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/', [TiketsController::class,'tiket'])->name('tiket');
Route::get('/cadastrar' ,[TiketsController::class,'cadastrar'])->name('cadastrar.tiket');
Route::get('/mostrar/{id}' ,[TiketsController::class,'mostrar'])->name('mostrar.tiket');
Route::get('/editar/{id}' ,[TiketsController::class,'editar'])->name('editar.tiket');
Route::post('/update' ,[TiketsController::class,'update'])->name('update.tiket');
Route::post('/inserir' ,[TiketsController::class,'inserir'])->name('inserir.tiket');
Route::post('/pesquisar' ,[TiketsController::class,'pesquisar'])->name('pesquisar.tiket');
Route::post('/deletar' ,[TiketsController::class,'deletar'])->name('deletar.tiket');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
