<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
//Rutas normales 
/*
Extisten las siguietnes rutas
GET, que para poder inviar informacion a la web, o las vistas
POST; es para recibir informacion de la web, los formularios
PUT; Es para actualizar los formularios funciona similar que post
PATCH;Se en carga de actualizar de la misma manera
*/ 

Route::get('/', [HomeController::class, 'login']);
Route::get('/home',[HomeController::class, 'index']);
Route::get('/posts', [PostController::class, 'index']);
//Ruta variables son de la siguiente manera
//Importa el order en las que se quieren vizualicar la rutas
Route::get('/posts/crate', [PostController::class, 'create']);
Route::get('posts/{id}', [PostController::class, 'show']);
