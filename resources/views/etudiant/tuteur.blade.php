@extends('etudiant.dashboard.default')

@section('title')
    Évalue le tuteur
@endsection

@section('content')
    <main class="container mt-5">
        <section class="row justify-content-center">
            <article class="col-md-6">
                <h3 class="text-center">J'évalue mon tuteur</h3>
                <form action="/etudiant/dashboard/evalue/tuteur" method="post">

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
                            <label for="nom">Nom et prénom du tuteur :</label>
                            <input type="text" name="nom" class="form-control" required>
                        </div>
    
                        <div class="form-group">
                            <label for="note">Note :</label>
                            <input type="number" name="note" class="form-control" required>
                        </div>
    
                        <button type="submit" class="btn btn-primary">Enregistrer l'évaluation</button>
                    </form>
            </article>
        </section>
        <main>
        @endsection