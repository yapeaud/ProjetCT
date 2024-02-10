<?php

namespace App\Http\Controllers;

use App\Models\Internship;
use Illuminate\Http\Request;
use App\Models\InternshipGereTuteur;
use App\Models\InternshipNoteTuteur;
use Illuminate\Support\Facades\Hash;
use App\Models\InternshipAttribueEtudiant;

class InternshipController extends Controller
{
    public function index()
    {
      return view('internship.index');
    }
  
    public function inscription()
    {
      return view('internship.inscription');
    }

    public function traitementInscriptionInternship(Request $request)
    {
// Validation des données
$request->validate([
    'nom' => 'required|string|max:255',
    'prenom' => 'required|string|max:255',
    'contact' => 'required|string|max:255',
    'email' => 'required|email|max:255',
    'mdp' => 'required'
  ]);

  $internship = new Internship;
  $internship->nom = $request->input('nom');
  $internship->prenom = $request->input('prenom');
  $internship->contact = $request->input('contact');
  $internship->email = $request->input('email');
  $internship->mot_de_passe  = Hash::make($request->input('mdp'));
  $internship->save();
  return back()->with("successAdd", "Inscription reçue !");
    }

    public function listeInternship()
  {
    $internships = Internship::all();
    return view('internship.liste', compact('internships'));
  }
   
  public function internshipDashboard()
  {
    return view('internship.dasboard');
  }

  public function internshipNoteTuteur()
  {
    $internship_note_tuteurs = InternshipNoteTuteur::all();
    return view('internship.note', compact('internship_note_tuteurs'));
  }

  public function traitementInternshipNoteTuteur(Request $request)
  {
 // Validation des données
 $request->validate([
    'nom' => 'required|string|max:255',
    'note' => 'required|string|max:255',
  ]);

  $internship_note_tuteur = New InternshipNoteTuteur;
  $internship_note_tuteur->nom_du_tuteur = $request->input('nom');
  $internship_note_tuteur->note_du_tuteur = $request->input('note');
  $internship_note_tuteur->save();
  return back()->with("successAdd", "Soumission reçue! !");

  }

  public function internshipGereTuteur()
  {
    $internship_gere_tuteurs = InternshipGereTuteur::all();
    return view('internship.gere', compact('internship_gere_tuteurs'));
  }

  public function traitementInternshipGereTuteur(Request $request)
  {
 // Validation des données
 $request->validate([
    'nom' => 'required|string|max:255',
    'contact' => 'required|string|max:255',
    'email' => 'required|email|max:255',
    'specialite' => 'required|string|max:255',
  ]);

  $internship_gere_tuteur = new InternshipGereTuteur;
  $internship_gere_tuteur->nom = $request->input('nom');
  $internship_gere_tuteur->contact = $request->input('contact');
  $internship_gere_tuteur->email = $request->input('email');
  $internship_gere_tuteur->specialite	= $request->input('specialite');
  $internship_gere_tuteur->save();
  return back()->with("successAdd", "Soumission reçue!");
  }

  public function internshipAttribueEtudiant()
  {
    $internship_attribue_etudiants = InternshipAttribueEtudiant::all();
    return view('internship.attribue', compact('internship_attribue_etudiants'));
  }
  
  public function traitementInternshipAttribueEtudiant(Request $request)
  {
// Validation des données
$request->validate([
  'tutorname' => 'required|string|max:255',
  'studentname' => 'required|string|max:255',
  
]);

$internship_attribue_etudiant = New InternshipAttribueEtudiant;
$internship_attribue_etudiant->nom_du_tuteur = $request->input('tutorname');
$internship_attribue_etudiant->nom_de_l_etudiant = $request->input('studentname');
 $internship_attribue_etudiant->save();
 return back()->with("successAdd", "Soumission reçue!");
  }
}
