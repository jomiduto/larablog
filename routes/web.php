<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;

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

Route::get('/test', function () {
    return "Prueba ruta con Laravel. Perfil: <a href='" . route("profile") . "'>clic aquí</a>";
});

Route::get('/user/profile', function () {
    return "<h1>Ejemplo de Rutas con Nombres</h1>";
})->name('profile');
