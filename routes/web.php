<?php

use App\Http\Controllers\ProdutoController;
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
    Route::get('/add', [ProdutoController::class, 'add'])->name('produto.add');
    Route::delete('/delete', [ProdutoController::class, 'delete'])->name('produto.delete'); 
    
});
// Route::get('/usuario/{id}', function () {
//     return 'Test';
// });
