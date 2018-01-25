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
 * Ruta para el manejo de personas.
 * 
 * @url GET /ApiRest/public/api/persona -- Lista de personas.
 * @url GET /ApiRest/public/api/persona/{id} -- Retorna una persona por su Id.
 * @url POST /ApiRest/public/api/persona -- Guarda una persona.
 * @url UPDATE|PATCH /ApiRest/public/api/persona/{id} -- Modifica a la persona por su Id.
 * @url DELETE /ApiRest/public/api/persona/{id} -- Elimina la persona por el Id.
 */
Route::resource('persona', 'PersonaController', ['only' => ['index', 'show', 'store', 'update', 'destroy']]);
