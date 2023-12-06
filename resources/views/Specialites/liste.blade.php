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
            <h5 class="card-title">Liste des Spécialités</h5>



            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Spécialité</th>
                  <th scope="col">Image</th>
                  <th scope="col">Actions </th>
                </tr>
              </thead>
              <tbody>
                @foreach ( $specialites as $specialite )
                <tr>
                  <td>{{ $specialite->id }}</td>
                  <td>{{ $specialite->specialite }}</td>
                  
                  
                  <td><img class="h-50 w-50" src="{{ asset('storage') . '/' . $specialite->image }}" alt=""></td>

                  <td>
                    

                    <a href="{{ route('specialites.edit', $specialite->id ) }}" class="btn btn-info"><i class="bi bi-pencil-square" title="modifier"></i></a>
                  
                    <a href="{{ url('supprimer-specialites/' .$specialite->id) }}" class="btn btn-danger"> <i class="bi bi-trash" title="supprimer"></i></a>
                    
                    

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
