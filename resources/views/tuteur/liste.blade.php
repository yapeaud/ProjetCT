@extends('tuteur.dashboard.default')

@section('title')
    Liste des tuteurs
@endsection

@section('content')
    <main class="container mt-5">
        <h1 class="text-center">Liste des tuteurs </h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($tuteurs as $tuteur)
                    <tr>
                        <th scope="row">{{ $tuteur->id }}</th>
                        <td>{{ $tuteur->nom }}</td>
                        <td>{{ $tuteur->prenom }}</td>
                        <td>{{ $tuteur->contact }}</td>
                        <td>{{ $tuteur->email }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </main>
@endsection