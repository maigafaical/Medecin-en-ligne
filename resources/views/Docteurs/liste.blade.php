@extends('layouts.mainlayouts')

@section('contenu')




<section class="section">
  <div>

    @if (session('status'))
<div class="alert alert-success">
{{session('status')}}
</div>
@endif

    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Liste des Docteurs</h5>

           


            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nom</th>
                  <th scope="col">Prénom</th>
                  <th scope="col">Date de Naissance</th>
                  <th scope="col">Adresse </th>
                  <th scope="col">Sexe </th>
                  <th scope="col">Spécialité </th>
                  <th scope="col">Téléphone </th>
                  <th scope="col">Photo</th>
                  <th scope="col">Actions </th>
                </tr>
              </thead>
              <tbody>
                @foreach ( $docteurs as $docteur )
                <tr>
                  <td>{{ $docteur->id }}</td>
                  <td>{{ $docteur->nom }}</td>
                  <td>{{ $docteur->prenom }}</td>
                  <td>{{ $docteur->date_naissance }}</td>
                  <td>{{ $docteur->adresse }}</td>
                  <td>{{ $docteur->sexe }}</td>
                  <td>{{ $docteur->specialite }}</td>
                  <td>{{ $docteur->telephone }}</td>
                  
                  <td><img class="h-50 w-50" src="{{ asset('storage') . '/' . $docteur->photo }}" alt=""></td>

                  <td>
                    

                    <a href="{{ route('docteurs.edit', $docteur->id) }}" > <i class="bi bi-pencil-square"></i></a>
                   
                    <a href="{{ url('supprimer-docteurs/' .$docteur->id) }}"> <i class="bi bi-trash"></i></a>
                    
                    

                  </td>
                </tr>
                @endforeach


              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>
@endsection
