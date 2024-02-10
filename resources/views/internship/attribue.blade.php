@extends('internship.dashboard.default')

@section('title')
    Gestion des tuteurs
@endsection

@section('content')
    <main class="container mt-5">
        <section class="row justify-content-center">
            <article class="col-md-6">
                <h3 class="text-center">Attribue des étudiants</h3>
                <form action="/internship/dashboard/attribue" method="post">

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
                        <label for="tutorname">Saisissez le nom et prénoms du tuteur</label>
                        <input type="text" class="form-control" name="tutorname" required>
                    </div>

                    <div class="form-group">
                        <label for="studentname">Attribuez un étudiant au tuteur</label>
                        <input type="text" class="form-control" name="studentname" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Soumettre</button>
                </form>
            </article>
        </section>
    </main>
@endsection