<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlmacenController;
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
/*Route::get('/login', function () {
    return view('InicioSesion');
});*/

/*Route::get('/almacen', function () {
    return view('almacen.index');
});
Route::get('almacen/crear',[AlmacenController::class,'create']);*/

Route::resource('almacen', AlmacenController::class);