@extends('base')

@section('title')
    Connexion
@endsection

@section('content')
    

<main class="container mt-5">
  <section class="row justify-content-center">
    <article class="col-md-6">
      <div class="card">
        <div class="card-header">
           <h1 class="text-center">Connexion</h1>
        </div>
        <div class="card-body">
          <!-- Le formulaire commence ici -->
          <form>
            @csrf
            <div class="form-group">
              <label for="email">Email :</label>
              <input type="email" class="form-control" id="email" placeholder="Entrez votre email">
            </div>
            <div class="form-group">
              <label for="password">Mot de passe :</label>
              <input type="password" class="form-control" id="password" placeholder="Entrez votre mot de passe">
            </div>
            <br>  
            <button type="submit" class="btn btn-primary">Se connecter</button>
          </form>
          <!-- Fin du formulaire -->
        </div>
      </div>
    </article>
  </section>
</main>
@endsection



