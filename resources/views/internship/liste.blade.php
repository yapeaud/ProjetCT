
@section('title')
    Liste des membres du sss
@endsection

@section('content')
    <main class="container mt-5">
        <h1 class="text-center">Liste des membres du Service Stage et Emploi </h1>
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

                @foreach ($internships as $internship)
                    <tr>
                        <th scope="row">{{ $internship->id }}</th>
                        <td>{{ $internship->nom }}</td>
                        <td>{{ $internship->prenom }}</td>
                        <td>{{ $internship->contact }}</td>
                        <td>{{ $internship->email }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </main>
@endsection