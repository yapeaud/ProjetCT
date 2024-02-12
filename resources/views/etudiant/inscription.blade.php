@extends('base')

@section('title')
Inscription
@endsection

@section('content')
<main class="container mt-5">
  <section class="row justify-content-center">
    <article class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h1 class="text-center">Inscription</h1>
        </div>
        <div class="card-body">
          <!-- Le formulaire commence ici -->
          @section('content')
          <div class="container">
            @if(session()->has('successAdd'))
            <div class="alert alert-success mb-4">
              <h4>{{ session()->get('successAdd') }}</h4>
            </div>
            @endif

            @if(session()->has('successDelete'))
            <div class="alert alert-success mb-4">
              <h4>{{ session()->get('successDelete') }}</h4>
            </div>
            @endif

            {{-- @if ($errors->any())
            <div class="alert alert-danger">
              @foreach ($errors->all() as $error)
              <ul>
                <li>{{ $error }}</li>
              </ul>
              @endforeach
            </div>
            @endif --}}
            <form class="form-signin" method="POST" action="/etudiant/inscription">
              @csrf

              <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" class="form-control" id="nom" placeholder="Entrez votre nom" name="nom">
              </div>
              <div class="form-group">
                <label for="prenom">Prénom :</label>
                <input type="text" class="form-control" id="prenom" placeholder="Entrez votre prénom" name="prenom">
              </div>

              <div class="form-group">
                <label for="contact">Contact :</label>
                <input type="text" class="form-control" id="contact" placeholder="Entrez votre numéro de téléphone"
                  name="contact">
              </div>
              <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" class="form-control" id="email" placeholder="Entrez votre email" name="email">
              </div>
              <div class="form-group">
                <label for="password">Mot de passe :</label>
                <input type="password" class="form-control" id="password" placeholder="Entrez votre mot de passe"
                  name="mdp">
              </div>
              <br>
              <button class="btn btn-lg btn-primary btn-block" type="submit">S'inscrire</button>
            </form>
            <!-- Fin du formulaire -->
          </div>
        </div>
    </article>
  </section>
</main>
@endsection