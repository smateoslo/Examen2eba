<?php

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;
use App\Http\AdministracionController;

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

Route::view('/', 'enunciado');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/administracion', [App\Http\Controllers\AdministracionController::class, 'listaConductores']);

Route::get('admin', function(){
    if(Gate::allows('admin')){
        echo 'admin';
    }else{
        echo 'No eres administrador';
    }
});