<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;



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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('livro', LivroController::class);
Route::get('/livro', [LivroController::class, 'index']);
Route::get('/livro/create', [LivroController::class, 'create']);
Route::post('/livro/store', [LivroController::class, 'store']);
Route::get('/livro/{id}/edit', [LivroController::class, 'edit']);
Route::get('/livro/update/{id}', [LivroController::class, 'update']);
Route::delete('/livro/delete/{id}', [LivroController::class, 'delete']);






