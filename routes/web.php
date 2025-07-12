<?php

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('index');
});

Route::prefix('produto')->group(function(){
    Route::get('/', [ProdutoController::class, 'index'])->name('produto.index');
    // Route::get('/add', [ProdutoController::class, 'add'])->name('produto.add');
    Route::delete('/delete', [ProdutoController::class, 'delete'])->name('produto.delete'); 
    Route::get('/cadastrarProduto', [ProdutoController::class, 'addProduct'])->name('cadastrar.produto');
    Route::post('/cadastrarProduto', [ProdutoController::class, 'addProduct'])->name('cadastrar.produto');
    Route::get('/editarProduto/{id}', [ProdutoController::class, 'editProduct'])->name('editar.produto');
    Route::put('/editarProduto/{id}', [ProdutoController::class, 'editProduct'])->name('editar.produto');
});

Route::prefix('cliente')->group(function(){
    Route::get('/', [ClienteController::class, 'index'])->name('cliente.index');
    Route::get('/incluir', [ClienteController::class, 'create'])->name('cliente.create');
    Route::post('incluir', [ClienteController::class, 'add'])->name('cliente.add');
    Route::get('/edit/{id}', [ClienteController::class, 'edit'])->name('cliente.edit');
    Route::put('/update/{id}', [ClienteController::class, 'update'])->name('cliente.update');
    Route::delete('/delete', [ClienteController::class, 'delete'])->name('cliente.delete');
});