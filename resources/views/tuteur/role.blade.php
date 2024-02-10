@extends('tuteur.dashboard.default')

@section('title')
    Attribution de rôle
@endsection

@section('content')
    <main class="container mt-5">
        <section class="row justify-content-center">
            <article class="col-md-6">
                <h3 class="text-center">J'attribue des rôles aux étudiants</h3>
                <form action="/tuteur/dashboard/groupe/role" method="post">

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
                        <label for="nom">Entrez le nom du groupe :</label>
                        <input type="text" class="form-control" name="groupname" required>
                    </div>

                    <div class="form-group">
                        <label for="prenom">Entrez le nom et prénoms de l'étudiant :</label>
                        <input type="text" class="form-control" name="studentname" required>
                    </div>

                    <div class="form-group">
                        <label for="note">Attribuez un rôle :</label>
                        <input type="text" class="form-control" name="assignedrole" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Soumettre</button>
                </form>
            </article>
        </section>
    </main>
@endsection