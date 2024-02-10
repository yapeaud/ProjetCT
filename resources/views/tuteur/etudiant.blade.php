@extends('tuteur.dashboard.default')

@section('title')
    Évaluation
@endsection

@section('content')
    <main class="container mt-5">
        <section class="row justify-content-center">
            <article class="col-md-6">
                <h3 class="text-center">J'évalue, mes étudiants</h3>
                <form action="/tuteur/dashboard/evalue/etudiant" method="post">

                    @if (session()->has('successAdd'))
                        <div class="alert alert-success mb-4">
                            <h4>{{ session()->get('successAdd') }}</h4>
                        </div>
                    @endif

                    @if (session()->has('successDelete'))
                        <div class="alert alert-success mb-4">
                            <h4>{{ session()->get('successDelete') }}</h4>
                        </div>
                    @endif

                    @csrf
                   
                    <div class="form-group mt-3">
                        <label for="prenom">Nom et prénoms de l'évalué :</label>
                        <input type="text" class="form-control" name="evalue" required>
                    </div>

                    <div class="form-group">
                        <label for="note">Note :</label>
                        <input type="number" class="form-control" name="note" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Soumettre</button>
                </form>
            </article>
        </section>
    </main>
@endsection