@extends('etudiant.dashboard.default')

@section('title')
    Liste des étudians
@endsection

@section('content')
    <main class="container mt-5">
        <h1 class="text-center">Liste des étudiants </h1>
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

                @foreach ($etudiants as $etudiant)
                    <tr>
                        <th scope="row">{{ $etudiant->id }}</th>
                        <td>{{ $etudiant->nom }}</td>
                        <td>{{ $etudiant->prenom }}</td>
                        <td>{{ $etudiant->contact }}</td>
                        <td>{{ $etudiant->email }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </main>
@endsection