@section('title')
    Liste des membres de la pédagogies
@endsection

@section('content')
    <main class="container mt-5">
        <h1 class="text-center">Liste des membres de la pédagogies </h1>
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

                @foreach ($pedagogies as $pedagogie)
                    <tr>
                        <th scope="row">{{ $pedagogie->id }}</th>
                        <td>{{ $pedagogie->nom }}</td>
                        <td>{{ $pedagogie->prenom }}</td>
                        <td>{{ $pedagogie->contact }}</td>
                        <td>{{ $pedagogie->email }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </main>