<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

Route::get('/', function () {//Primera ruta con función anónima
    return view('welcome');
});

Route::get('/ventas', function(){
    return view ('ventas');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/compras', function(){
    return view ('compras');
});

Route::get('/departamentos', function(){
    return view ('departamentos');
});

Route::get('/usuarios', function(){
    return view ('usuarios');
});

Route::get('/exportes', function(){
    return view ('exportes');
});

Route::get('/perfil', function(){
    return view ('perfil');
});

Route::get('/verificar-conexion', function () {
    try {
        DB::connection()->getPdo();
        return "Conexión exitosa";
    } catch (\Exception $e) {
        return "Error al conectar a la base de datos: " . $e->getMessage();
    }
});
