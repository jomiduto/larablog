<?php

use App\Http\Controllers\dashboard\CategoryController;
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

// Ruta de tipo recurso para el controlador PostController
Route::resource('dashboard/post', PostController::class);

// Ruta para controllador CategoryController
Route::resource('dashboard/category', CategoryController::class);

// Ruta para cargar la imagen
Route::post('dashboard/post/{post}/image', [PostController::class, 'image'])->name('post.image');
