<?php

use App\Http\Controllers\dashboard\PostController;
use Illuminate\Routing\Route as RoutingRoute;
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
})->name('home');

// Route::get('/test', function () {
//     return "Prueba ruta con Laravel. Perfil: <a href='" . route("profile") . "'>clic aquí</a>";
// });

// Route::get('/user/profile', function () {
//     return "<h1>Ejemplo de Rutas con Nombres</h1>";
// })->name('profile');

// // Creación de ruta - Opción 1 con parámetros

// // Route::get('home', function () {
// //     $nombre = "Jose Miguel Dueñas Torres";
// //     return view("home")->with("nombre", $nombre); // Se especifica la vista que se quiere retornar, esta en la carpeta /resources/views
// // })->name("home");

// // Opción 2 con parámetros

// Route::get('home1/{nombre?}/{apellido?}', function ($nombre = "Lizet Daniela", $apellido = "Ospina Castro") {

//     return view("home", ["nombre" => $nombre, "apellido" => $apellido]);
// })->name("home");

// Route::get('/clase', function () {
//     $posts = ["Post 1", "Post 2", "Post 3", "Post 4"];

//     return view("clase", ['posts' => $posts]);
// })->name("clase");

// Ruta a un controlador PostController
// Route::get('post', [PostController::class, 'index']);

// Ruta de tipo recurso para el controlador PostController
Route::resource('dashboard/post', PostController::class);
