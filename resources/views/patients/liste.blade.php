@extends('layouts.mainlayouts')

@section('content')




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
            <h5 class="card-title">Liste des patients</h5>


            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nom</th>
                  <th scope="col">Prénom</th>
                  <th scope="col">Age</th>
                  <th scope="col">Téléphone </th>

                  <th scope="col">Actions </th>
                </tr>
              </thead>
              <tbody>
                @foreach ( $patients as $pati )
                <tr>
                  <td>{{ $pati->id }}</td>
                  <td>{{ $pati->nom }}</td>
                  <td>{{ $pati->prenom }}</td>
                  <td>{{ $pati->age }}</td>
                  <td>{{ $pati->telephone }}</td>


                 <td> <a href="{{ route('patients.edit', $pati->id ) }}" class="btn btn-info"><i class="bi bi-pencil-square" title="modifier"></i></a>
                  <a href="{{ route('patients.show', $pati->id ) }}" class="btn btn-success"><i class="bi bi-eye" title="détails"></i></a>
                  <a href="{{ url('supprimer-patient/' .$pati->id) }}" class="btn btn-danger"> <i class="bi bi-trash" title="supprimer"></i></a>

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