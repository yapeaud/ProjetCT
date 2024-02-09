@extends('etudiant.dashboard.default')

@section('title')
    Évalue les membres du groupe
@endsection

@section('content')
    <main class="container mt-5">
        <section class="row justify-content-center">
            <article class="col-md-6">
                <h3 class="text-center">Évaluation</h3>


                <form action="/etudiant/dashboard/evalue/membre" method="post">

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
                    @csrf

                    <div class="form-group mt-3">
                        <label for="nom">Entrez le nom et prénoms de l'étudiant</label>
                        <input type="text" class="form-control" name="nom" required>
                    </div>

                    <div class="form-group">
                        <label for="specialite">Spécialité</label>
                        <input type="text" class="form-control" name="specialite" required>
                    </div>

                    <div class="form-group">
                        <label for="note">Note :</label>
                        <input type="number" class="form-control" name="note" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Enregistrer l'évaluation</button>
                </form>
            </article>
        </section>
        <main>
        @endsection
