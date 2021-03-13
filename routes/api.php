<?php

use App\Models\Classe;
use App\Models\Matiere;
use App\Models\Note;
use App\Models\Student;
use App\Models\Prof;
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

Route::middleware('api_auth')->group(function () {

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

    // 
    // ROUTE PROF
    //

    //affichage de toutes les intervenants
    Route::get('/profs', function() {
        return Prof::all();
    });

    //affichage de les intervenants sélectionnée
    Route::get('/profs/{ProfId}', function($ProfId) {
        return Prof::findOrFail($ProfId);
    });

    //modification des infos de l'intervenant sélectionnée
    Route::put('/profs/{ProfId}', function($ProfId, Request $request) {
        $prof = Prof::findOrFail($ProfId);
        $prof -> update($request->all());
        return $prof;
    });

    //suppression d'un étudiant
    Route::delete('/profs/{ProfId}', function($ProfId){
        return Prof::findOrFail($ProfId)->delete();
    });

    //ajout d'un étudiant
    Route::post('/profs', function(Request $request) {
        return Prof::create($request->all());
    });

    // 
    // ROUTE MATIERE
    //

    //affichage de toutes les matieres
    Route::get('/matieres', function() {
        return Matiere::all();
    });

    //affichage de la matiere sélectionnée
    Route::get('/matieres/{MatiereId}', function($MatiereId) {
        return Matiere::findOrFail($MatiereId);
    });

    //modification des infos de la matière sélectionnée
    Route::put('/matieres/{MatiereId}', function($MatiereId, Request $request) {
        $matiere = Matiere::findOrFail($MatiereId);
        $matiere -> update($request->all());
        return $matiere;
    });

    //suppression d'une matière
    Route::delete('/matieres/{MatiereId}', function($MatiereId){
        return Matiere::findOrFail($MatiereId)->delete();
    });

    //ajout d'une matière
    Route::post('/matieres', function(Request $request) {
        return Matiere::create($request->all());
    });

    // 
    // ROUTE NOTE
    //

    //affichage de toutes les notes
    Route::get('/notes', function() {
        return Note::all();
    });

    //suppression d'une note
    Route::delete('/notes/{NoteId}', function($NoteId){
        return Note::findOrFail($NoteId)->delete();
    });

    //ajout d'une note
    Route::post('/notes', function(Request $request) {
        return Note::create($request->all());
    });

});
