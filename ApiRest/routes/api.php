<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * Ruta de prueba.
 * 
 * @url GET /ApiRest/public/api/foo
 */
Route::get('foo', function () {
    return 'Hello World';
});

/**
 * Ruta para el manejo de resgistros.
 * 
 * @url GET /ApiRest/public/api/registro -- Lista de registros.
 * @url GET /ApiRest/public/api/resgitro/{id} -- Retorna un registro por su Id.
 * @url POST /ApiRest/public/api/registro -- Guarda un registro.
 * @url UPDATE|PATCH /ApiRest/public/api/registro/{id} -- Modifica el registro por su Id.
 * @url DELETE /ApiRest/public/api/registro/{id} -- Elimina el registro por el Id.
 */
Route::resource('registro', 'RegistroController', ['only' => ['index', 'show', 'store', 'update', 'destroy']]);
