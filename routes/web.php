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

route::middleware(['auth'])->group(function(){
    Route::get('/', function () {
        return view('layout.home');
    });
   //resgistration
   
   
   Route::get('logout', function () {
       Auth::logout();
       return redirect('/');
    });

    Route::get('/export', [ExportController::class, 'export'])->name('export');

});
Route::get('/register', function () {
    return view('layout.register');
});
route::get('/m', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
