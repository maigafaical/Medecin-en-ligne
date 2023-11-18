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
            <h5 class="card-title">Liste des Patients</h5>

            

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nom</th>
                  <th scope="col">Prénom</th>
                  <th scope="col">Age</th>
                  <th scope="col">Adresse </th>
                  <th scope="col">Sexe </th>
                  <th scope="col">Téléphone </th>
                  <th scope="col">Dernière visite</th>
                  <th scope="col">Actions </th>
                </tr>
              </thead>
              <tbody>
                @foreach ( $patients as $patient )
                <tr>
                  <td>{{ $patient->id }}</td>
                  <td>{{ $patient->nom }}</td>
                  <td>{{ $patient->prenom }}</td>
                  <td>{{ $patient->age }}</td>
                  <td>{{ $patient->adresse }}</td>
                  <td>{{ $patient->sexe }}</td>
                  <td>{{ $patient->telephone }}</td>
                  <td>{{ $patient->derniere_visite }}</td>
                

                  <td>
                    

                    <a href="{{ route('patients.edit', $patient->id) }}" > <i class="bi bi-pencil-square"></i></a>
                   
                    <a href="{{ url('supprimer-patients/' .$patient->id) }}"> <i class="bi bi-trash"></i></a>
                    
                    

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
