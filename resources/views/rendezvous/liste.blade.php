@extends('layouts.mainlayouts')
@section('content')


@if (session('status'))
<div class="alert alert-success">
{{session('status')}}
</div>
@endif




<section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">

           <div class="text-center">
            <p>LISTE DES RENDEZ-VOUS</p>
        </div>
            <!-- Table with stripped rows -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">N</th>
                  <th scope="col">Nom</th>
                  <th scope="col">Prenom</th>
                  <th scope="col">age</th>
                  <th scope="col">adresse</th>
                  <th scope="col">sexe</th>
                  <th scope="col">telephone</th>
                  <th scope="col">date_rdv</th>
                  <th scope="col">heure_rdv</th>
                  <th scope="col">statut</th>
  
                </tr>
              </thead>
              <tbody>
                
                  @foreach ($rendezvous as $rend )
                  <tr>
                    <td>{{ $rend->id }}</td>
                    <td>{{ $rend->nom }}</td>
                    <td>{{ $rend->prenom }}</td>
                    <td>{{ $rend->age }}</td>
                    <td>{{ $rend->adresse }}</td>
                    <td>{{ $rend->sexe }}</td>
                    <td>{{ $rend->date_rdv }}</td>
                    <td>{{ $rend->heure_rdv }}</td>
                    <td>{{ $rend->statut }}</td>
                    

                    <td> <img src="{{asset('storage') . '/' . $rend->photo}}" class="h-25 w-25" alt="..."></td>

                    <td>          
                      <a href="{{ route('rendezvous.show', $rend->id ) }}" class="btn btn-success"><i class="bi bi-eye" title="détails"></i></a>
                      <a href="{{ route('rendezvous.edit', $rend->id ) }}" class="btn btn-info"><i class="bi bi-pencil-square" title="modifier"></i></a>
                      <a href="{{ url('supprimer-presidentj/' .$rend->id) }}" class="btn btn-danger"> <i class="bi bi-trash"></i></a>                   
                  </td>
                   
            
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