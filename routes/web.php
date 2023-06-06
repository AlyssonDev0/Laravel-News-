<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticiaController;

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

Route::get('/', [NoticiaController::class, 'index']);
Route::get('/cadastro-noticia', [NoticiaController::class, 'cadNoticia']);
Route::get('/cadastro-categoria', [NoticiaController::class, 'cadCateg']);
Route::post('/categoria/cadastrar', [NoticiaController::class, 'storeCategoria']);
Route::post('/noticia/cadastrar', [NoticiaController::class, 'storeNoticia']);
Route::delete('/categorias/deletar/{id}', [NoticiaController::class, 'destroyCategoria']);
Route::get('/noticia/editar/{id}', [NoticiaController::class, 'editNoticia']);
Route::put('/noticia/update/{id}', [NoticiaController::class, 'updateNoticia']);
Route::delete('/noticia/deletar/{id}', [NoticiaController::class, 'destroyNoticia']);
