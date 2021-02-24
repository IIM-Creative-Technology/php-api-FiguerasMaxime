<?php

use GrahamCampbell\ResultType\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//affichage de toutes les classes
Route::get('/classes', function() {
    return "Liste des classes";
});

//affichage de la classe sélectionnée
Route::get('/classes/{ClasseId}', function($ClasseId) {
    return "Voici la classe n°" . $ClasseId;
});

//modification des infos de la classe sélectionnée
Route::put('/classes/{ClasseId}', function($ClasseId, Request $request) {

});

//suppression d'une classe 
Route::delete('/classes/{ClasseId}', function($ClasseId){

});

//ajout d'une classe
Route::post('/classes', function(Request $request) {

});


