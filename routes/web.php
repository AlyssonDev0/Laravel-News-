<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\CategoriaController;

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

//Notícia Controller
Route::get('/', [NoticiaController::class, 'index']);
Route::get('/cadastro-noticia', [NoticiaController::class, 'create'])->name('create-store-noticia');
Route::post('/noticia/cadastrar', [NoticiaController::class, 'store'])->name('store-noticia');
Route::get('/noticia/editar/{id}', [NoticiaController::class, 'createUpdate'])->name('create-update-noticia');
Route::put('/noticia/update/{id}', [NoticiaController::class, 'update'])->name('update-noticia');
Route::delete('/noticia/deletar/{id}', [NoticiaController::class, 'destroy'])->name('destroy-noticia');

//Categoria Controller
Route::get('/cadastro-categoria', [CategoriaController::class, 'index'])->name('create-categoria');
Route::post('/categoria/cadastrar', [CategoriaController::class, 'store'])->name('store-categoria');
Route::get('/categoria/editar/{id}', [CategoriaController::class, 'createUpdate'])->name('create-update-categoria');
Route::put('/categoria/update/{id}', [CategoriaController::class, 'update'])->name('update-categoria');
Route::delete('/categorias/deletar/{id}', [CategoriaController::class, 'destroy'])->name('destroy-categoria');


