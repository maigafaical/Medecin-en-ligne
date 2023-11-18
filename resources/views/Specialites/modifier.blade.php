@extends('layouts.mainlayouts')

@section('contenu')




<div class="pagetitle">

  <div>

    @if (session('status'))
  <div class="alert alert-success">
  {{session('status')}}
  </div>

  @endif
<ul>
@foreach ($errors->all() as $error)
  <li class="alert alert-danger"> {{ $error }}</li>
@endforeach
</ul>
    <h1>Tableau Bord</h1>
    <nav>
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="dashboard">Accueil</a></li>
        <li class="breadcrumb-item active">Nouvelle inscription</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->

  <section class="section dashboard">

    <div class="row">
      <!-- Left side columns -->
      <div class="col-lg-12">
        <div class="row">

          <!-- Formulaire inscription etudiant -->

          <div class="col-12">
            <div class="card recent-sales overflow-auto">
              <div class="card-body">
                <h5 class="card-title">Modifier une spécialité </h5>

              <form method="POST" action="{{route('specialites.update', [$specialites->id])}}" class="row g-3" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
              <div class="col-6 mt-5">
                <label for="inputName5" class="form-label">Spécialité </label>
                <input type="text" class="form-control" name="specialite" value="{{ $specialites->specialite}}">
              </div>
              
              
                <div class="col-6 mt-5">
                    <label for="inputName5" class="form-label">Image </label>
                    <input type="file" name="image" class="form-control" placeholder="image" value="{{ $specialites->image}}">
               </div>

              <div class="text-center">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="reset" class="btn btn-danger">Annuler</button>
              </div>
            </form>

              </div>

            </div>
          </div>
          <!-- End Formulaire inscription etudiant -->

        </div>
      </div>
      <!-- End Left side columns -->

    </div>
  </section>
  @include('require.footer')

@endsection
