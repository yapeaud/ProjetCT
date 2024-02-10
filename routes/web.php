<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TuteurController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\InternshipController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* ---------- ETUDIANT ----------- */
Route::get('/etudiant/connexion', [EtudiantController::class, 'index'])->name('connexion');
Route::get('/etudiant/inscription', [EtudiantController::class, 'inscription'])->name('inscription');
Route::post('/etudiant/inscription', [EtudiantController::class, 'traitementInscriptionEtudiant'])->name('traitementInscriptionEtudiant');
Route::get('/etudiant/liste', [EtudiantController::class, 'listeEtudiant'])->name('listeEtudiant');
Route::get('/etudiant/dashboard', [EtudiantController::class, 'etudiantDashboard'])->name('etudiantDashboard');

#L'étudiant évalue les membres de son groupe.
Route::get('/etudiant/dashboard/evalue/membre', [EtudiantController::class, 'etudiantEvalueMembre'])->name('etudiantEvalueMembre');
Route::post('/etudiant/dashboard/evalue/membre', [EtudiantController::class, 'traitementEtudiantEvalueMembre'])->name('traitementEtudiantEvalueMembre');

#L'étudiant évalue son tuteur
Route::get('/etudiant/dashboard/evalue/tuteur', [EtudiantController::class, 'etudiantEvalueTuteur'])->name('etudiantEvalueTuteur');
Route::post('/etudiant/dashboard/evalue/tuteur', [EtudiantController::class, 'traitementEtudiantEvalueTuteur'])->name('traitementEtudiantEvalueTuteur');

#L'étudiant dépose son rapport
Route::get('/etudiant/dashboard/rapport', [EtudiantController::class, 'etudiantRapport'])->name('etudiantRapport');
Route::post('/etudiant/dashboard/rapport', [EtudiantController::class, 'traitementEtudiantRapport'])->name('traitementEtudiantRapport');

/* ---------- TUTEURS ----------- */
Route::get('/tuteur/connexion', [TuteurController::class, 'index'])->name('connexion');
Route::get('/tuteur/inscription', [TuteurController::class,'inscription'])->name('inscription');
Route::post('/tuteur/inscription', [TuteurController::class,'traitementInscriptionTuteur'])->name('traitementInscriptionTuteur');
Route::get('/tuteur/liste', [TuteurController::class, 'listeTuteur'])->name('listeTiteur');
Route::get('/tuteur/dashboard', [TuteurController::class, 'tuteurDasboard'])->name('tuteurDasboard');

#Le tuteur évalue ses étudiants
Route::get('/tuteur/dashboard/evalue/etudiant', [TuteurController::class, 'tuteurEvalueEtudiant'])->name('tuteurEvalueEtudiant');
Route::post('/tuteur/dashboard/evalue/etudiant', [TuteurController::class, 'traitementTuteurEvalueEtudiant'])->name('traitementTuteurEvalueEtudiant');

#Le tuteur crée un groupe
Route::get('/tuteur/dashboard/groupe', [TuteurController::class, 'tuteurCreeGroupe'])->name('tuteurCreeGroupe');
Route::post('/tuteur/dashboard/groupe', [TuteurController::class, 'traitementTuteurCreeGroupe'])->name('traitementTuteurCreeGroupe');

#Le tuteur attribue un rôle
Route::get('/tuteur/dashboard/groupe/role', [TuteurController::class, 'tuteurAttribueRole'])->name('tuteurAttribueRole');
Route::post('/tuteur/dashboard/groupe/role', [TuteurController::class, 'traitementTuteurAttribueRole'])->name('traitementTuteurAttribueRole');

#Le tuteur dépose un rapport
Route::get('/tuteur/dashboard/rapport', [TuteurController::class, 'tuteurRapport'])->name('tuteurRapport');
Route::post('/tuteur/dashboard/rapport', [TuteurController::class, 'traitementTuteurRapport'])->name('traitementTuteurRapport');

/* ---------- RESPONSABLE DU SERVICE STAGE ET EMPLOI ----------- */
Route::get('/internship/connexion', [InternshipController::class, 'index'])->name('connexion');
Route::get('/internship/inscription', [InternshipController::class,'inscription'])->name('inscription');
Route::post('/internship/inscription', [InternshipController::class,'traitementInscriptionInternship'])->name('traitementInscriptionInternship');
Route::get('/internship/liste', [InternshipController::class, 'listeInternship'])->name('listeInternship');
Route::get('/internship/dashboard', [InternshipController::class, 'internshipDashboard'])->name('internshipDashboard');

#L'internship note le tuteur
Route::get('/internship/dashboard/note', [InternshipController::class, 'internshipNoteTuteur'])->name('internshipNoteTuteur');
Route::post('/internship/dashboard/note', [InternshipController::class, 'traitementInternshipNoteTuteur'])->name('traitementInternshipNoteTuteur');

#Gestion du tuteur par le responsable du service stage et emploi
Route::get('/internship/dashboard/gere', [InternshipController::class, 'internshipGereTuteur'])->name('internshipGereTuteur');
Route::post('/internship/dashboard/gere', [InternshipController::class, 'traitementInternshipGereTuteur'])->name('traitementInternshipGereTuteur');