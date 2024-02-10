@extends('internship.dashboard.default')

@section('title')
    Notation du tuteur
@endsection

@section('content')
    <main class="container mt-5">
        <section class="row justify-content-center">
            <article class="col-md-6">
                <h3 class="text-center">La note du tuteur</h3>
                <form action="/internship/dashboard/note" method="post">

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
                        <label for="nom">Saisissez le nom et prénoms du tuteur</label>
                        <input type="text" class="form-control" name="nom" required>
                    </div>

                    <div class="form-group">
                        <label for="note">Saisissez la note du tuteur</label>
                        <input type="number" class="form-control" name="note" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Soumettre la note</button>
                </form>
            </article>
        </section>
    </main>
@endsection