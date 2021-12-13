<?php

use App\Http\Controllers\CadastrosController;
use GuzzleHttp\Promise\Create;
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

Route::get('/cadastros', [CadastrosController::class, 'create']);
Route::post('/cadastros', [CadastrosController::class, 'store'])->name('ver');

Route::get('/cadastros/ver/{id}', [CadastrosController::class, 'show']);

Route::get('/cadastros/editar/{id}', [CadastrosController::class, 'editar']);
Route::post('/cadastros/editar/{id}', [CadastrosController::class, 'update'])->name('atualiza');

Route::get('/cadastros/deletar/{id}', [CadastrosController::class, 'delete']);
Route::post('/cadastros/deletar/{id}', [CadastrosController::class, 'destroi'])->name('exclui');