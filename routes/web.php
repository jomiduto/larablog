<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Route as RoutingRoute;
use App\Http\Controllers\dashboard\PostController;
use Symfony\Component\HttpKernel\Profiler\Profile;
use App\Http\Controllers\dashboard\CategoryController;

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

// Ruta de tipo recurso para el controlador PostController
Route::resource('dashboard/post', PostController::class);

// Ruta para controllador CategoryController
Route::resource('dashboard/category', CategoryController::class);

// Ruta para cargar la imagen
Route::post('dashboard/post/{post}/image', [PostController::class, 'image'])->name('post.image');

// Rutas del modulo de autenticación
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
