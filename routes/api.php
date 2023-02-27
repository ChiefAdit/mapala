<?php

use Illuminate\Http\Request;
use App\Models\Peminjam;
use App\Http\Controllers\apiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
route::middleware(['auth:sanctum'])->group(function(){
    Route::get('/product',[apiController::class, 'index']);
    // buat route untuk menambahkan data
    Route::post('/tambah',[apiController::class, 'store']);
    // buat route untuk mengubah data
    Route::put('/edit/{id}',[apiController::class, 'update']);
    // buat route untuk menghapus data
    Route::delete('/delete/{id}',[apiController::class, 'destroy']);

});


// buat route untuk login
Route::post('/login', [apiController::class, 'login']);