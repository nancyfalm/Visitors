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

Route::get('visitors', 'VisitorsController@getAll')->name('getAllVisitors');//Obtener todos los visitantes
Route::post('visitors', 'VisitorsController@add')->name('addVisitors');//Crear un visitante
Route::get('visitors/{id}', 'VisitorsController@get')->name('getVisitor');//Obtener un visitante
Route::post('visitors/{id}', 'VisitorsController@edit')->name('editVisitor');//Editar un visitante
Route::get('visitors/delete/{id}', 'VisitorsController@delete')->name('deleteVisitor');//Eliminar un visitante


