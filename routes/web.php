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

// Creación de ruta - Opción 1 con parámetros

Route::get('home', function () {
    $nombre = "Jose Miguel Dueñas Torres";
    return view("home")->with("nombre", $nombre); // Se especifica la vista que se quiere retornar, esta en la carpeta /resources/views
})->name("home");

// Opción 2 con parámetros

Route::get('home1/{nombre?}/{apellido?}', function ($nombre = "Lizet Daniela", $apellido = "Ospina Castro") {
    // return view("home")->with("nombre", $nombre);
    return view("home", ["nombre" => $nombre, "apellido" => $apellido]);
})->name("home");
