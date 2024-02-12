<?php

namespace App\Http\Controllers;

use App\Models\Pedagogie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PedagogieController extends Controller
{
  public function index()
  {
    return view('pedagogie.index');
  }

  public function inscription()
  {
    return view('pedagogie.inscription');
  }
  public function traitementInscriptionPedagogie(Request $request)
  {
    // Validation des données
    $request->validate([
      'nom' => 'required|string|max:255',
      'prenom' => 'required|string|max:255',
      'contact' => 'required|string|max:255',
      'email' => 'required|email|max:255',
      'mdp' => 'required'
    ]);

    $pedagogie = new Pedagogie;
    $pedagogie->nom = $request->input('nom');
    $pedagogie->prenom = $request->input('prenom');
    $pedagogie->contact = $request->input('contact');
    $pedagogie->email = $request->input('email');
    $pedagogie->mot_de_passe  = Hash::make($request->input('mdp'));
    $pedagogie->save();
    return back()->with("successAdd", "Inscription reçue !");
  }

  public function listePedagogie()
  {
    $pedagogies = Pedagogie::all();
    return view('pedagogie.liste', compact('pedagogies'));
  }

  public function pedagogieDashboard()
  {
    return view('pedagogie.dashboard');
  }

  public function catégoriePedagogie()
  {
    return view('pedagogie.categorie');
  }
  public function grilleEvaluationEtudiantParTuteur()
  {
    return view('pedagogie.etudiant');
  }

  public function grilleEvaluationTuteurParEtudiant()
  {
    return view('pedagogie.tuteur');
  }

  public function grilleEvaluationTuteurParAdmin()
  {
    return view('pedagogie.admin');
  }

  public function grilleEvaluationTuteurParGroupe()
  {
    return view('pedagogie.groupe');
  }
}
