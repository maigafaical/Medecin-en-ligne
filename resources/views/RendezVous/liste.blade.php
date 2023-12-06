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
            <h5 class="card-title">Liste des Rendez-vous</h5>

            

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nom</th>
                  <th scope="col">Prénom</th>
                  <th scope="col">Date </th>
                  <th scope="col">Statut </th>
                  <th scope="col">Docteur </th>
                  <th scope="col">Actions </th>
                </tr>
              </thead>
              <tbody>
                @foreach ( $rendezvous as $rendezvou )
                <tr>
                  <td>{{ $rendezvou->id }}</td>
                  <td>{{ $rendezvou->nom }}</td>
                  <td>{{ $rendezvou->prenom }}</td>
                  <td>{{ $rendezvou->date_rdv }}</td>
                  <td>{{ $rendezvou->statut }}</td>
                  <td>{{ $rendezvou->docteurs->nom }} {{ $rendezvou->docteurs->prenom }}</td>
                

                  <td>
                    

                    <a href="{{ route('rendezvous.edit', $rendezvou->id ) }}" class="btn btn-info"><i class="bi bi-pencil-square" title="modifier"></i></a>
                    <a href="{{ route('rendezvous.show', $rendezvou->id ) }}" class="btn btn-success"><i class="bi bi-eye" title="détails"></i></a>
                    <a href="{{ url('supprimer-rendezvous/' .$rendezvou->id) }}" class="btn btn-danger"> <i class="bi bi-trash" title="supprimer"></i></a>
                    
                    

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
