@extends('tuteur.dashboard.default')

@section('title')
    Créer un groupe
@endsection

@section('content')
    <main class="container mt-5">
        <section class="row justify-content-center">
            <article class="col-md-6">
                <h3 class="text-center">Le tuteur crée un groupe</h3>
                <form action="/tuteur/dashboard/groupe" method="post">

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
                        <label for="groupname">Saisis le nom du groupe :</label>
                        <input type="text" class="form-control" name="groupname" required>
                    </div>
                    <div class="form-group">
                        <label for="specialty">Saisis la spécialité :</label>
                        <input type="text" class="form-control" name="specialty" required>
                    </div>
                    <div class="form-group">
                        <label for="studentnumbers">Saisis le nombre d'étudiants :</label>
                        <input type="number" class="form-control" name="studentnumbers" required>
                    </div>
                    <div class="form-group">
                        <label for="tutorsname">Saisis le nom du tuteur :</label>
                        <input type="text" class="form-control" name="tutorsname" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Soumettre</button>
                </form>
            </article>
        </section>
    </main>
@endsection