<?php

use App\Models\Classe;
use App\Models\Student;
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

// 
// ROUTE CLASSE
//

//affichage de toutes les classes
Route::get('/classes', function() {
    return Classe::all();
});

//affichage de la classe sélectionnée
Route::get('/classes/{ClasseId}', function($ClasseId) {
    return Classe::findOrFail($ClasseId);
});

//modification des infos de la classe sélectionnée
Route::put('/classes/{ClasseId}', function($ClasseId, Request $request) {
    $classe = Classe::findOrFail($ClasseId);
    $classe -> update($request->all());
    return $classe;
});

//suppression d'une classe 
Route::delete('/classes/{ClasseId}', function($ClasseId){
    return Classe::findOrFail($ClasseId)->delete();
});

//ajout d'une classe
Route::post('/classes', function(Request $request) {
    return Classe::create($request->all());
});

// 
// ROUTE STUDENT
//

//affichage de toutes les étudiants
Route::get('/students', function() {
    return Student::all();
});

//affichage de l'étudiant sélectionnée
Route::get('/students/{StudentId}', function($StudentId) {
    return Student::findOrFail($StudentId);
});

//modification des infos de l'étudiant sélectionnée
Route::put('/students/{StudentId}', function($StudentId, Request $request) {
    $etudiant = Student::findOrFail($StudentId);
    $etudiant -> update($request->all());
    return $etudiant;
});

//suppression d'un étudiant
Route::delete('/students/{StudentId}', function($StudentId){
    return Student::findOrFail($StudentId)->delete();
});

//ajout d'un étudiant
Route::post('/students', function(Request $request) {
    return Student::create($request->all());
});
