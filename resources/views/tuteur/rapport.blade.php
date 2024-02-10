@extends('tuteur.dashboard.default')

@section('title')
    Rapport du tuteur
@endsection

@section('content')
    <main class="container mt-5">
        <section class="row justify-content-center">
            <article class="col-md-6">
                <h3 class="text-center">Le rapport du tuteur</h3>
                <form action="/etudiant/dashboard/rapport" method="post" enctype="multipart/form-data">
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
                        <label for="title">Le nom du rapport</label>
                        <input type="text" class="form-control" name="title" id="title" required>
                    </div>
                    <div class="form-group">
                        <label for="file">Sélectionnez un fichier :</label>
                        <input type="file" class="form-control-file" name="file" accept=".docx, .xlsx, .pptx, .pdf">
                    </div>
                    <button type="submit" class="btn btn-primary">Déposer</button>
                </form>
            </article>
        </section>
    </main>
@endsection