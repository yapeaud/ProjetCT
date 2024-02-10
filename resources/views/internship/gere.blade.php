@extends('internship.dashboard.default')

@section('title')
Gestion des tuteurs
@endsection

@section('content')

<main class="container mt-5">
  <section class="row justify-content-center">
    <article class="col-md-6">
      <h3 class="text-center">Gère les tuteurs</h3>
      <form class="form-signin" method="POST" action="/internship/dashboard/gere">
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
        @csrf
        <div class="form-group">
          <div class="form-group mt-3">
            <label for="nom">Nom et prénoms du tuteur</label>
            <input type="text" class="form-control" id="nom" placeholder="Entrez le nom du tuteur" name="nom">
          </div>
        </div>
        <div class="form-group">
          <label for="contact">Contact :</label>
          <input type="text" class="form-control" id="contact" placeholder="Entrez le numéro de téléphone du tuteur" name="contact">
        </div>
        <div class="form-group">
          <label for="email">Email :</label>
          <input type="email" class="form-control" id="email" placeholder="Entrez l'email du tuteur" name="email">
        </div>
        <div class="form-group">
          <label for="specialite">Spécialité</label>
          <input type="specialite" class="form-control" id="specialite" placeholder="Entrez la spécialité du tuteur "
            name="specialite">
        </div>
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Soumettre</button>
      </form>
    </article>
  </section>
</main>
@endsection