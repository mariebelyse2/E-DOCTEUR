@extends('layouts.mainlayouts')
@section('content')

<div class="pagetitle">
    <h1>Tableau Bord</h1>
    <nav>
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="dashboard">Accueil</a></li>
        <li class="breadcrumb-item active">Nouvelle inscription</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->

  <section class="section profile">@extends('layouts.mainlayouts')

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
                <h5 class="card-title">Liste des Rendez-vous</h5>
    
    
    
                <!-- Table with stripped rows -->
                <table class="table datatable">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nom</th>
                      <th scope="col">Prénom</th>
                      <th scope="col">Date </th>
                      <th scope="col">statut </th>
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
    <div class="row">
      <div class="col-xl-4">
        <div class="card">
          {{-- <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

            <img src="{{ asset('storage').'/'.$rendezvous->photo_rendezvous }}" alt="Profile" class="rounded-circle">
            <h2>{{ $rendezvous->nom }} {{ $rendzvous->prenom }}</h2>
            <h3>{{ $rendezvous->filiere }}</h3>
           
          </div> --}}
        </div>

      </div>
       
      <div class="col-xl-8">

        <div class="card">
          <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">

              <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Details</button>
              </li>
              <li class="nav-item">
                {{-- <a href="{{ rendzvous.liste }}"  class="nav-link">Voir la liste</a> --}}
              </li>

            </ul>
              
            </ul>
            <div class="tab-content pt-2">

              <div class="tab-pane fade show active profile-overview" id="profile-overview">

                <div class="row">
                  <div class="col-lg-3 col-md-4 label ">Nom</div>
                  <div class="col-lg-9 col-md-8">{{ $rendezvous->nom }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Prénom</div>
                  <div class="col-lg-9 col-md-8">{{ $rendezvous->prenom }}</div>
                </div>

                <div class="col-lg-6 mt-3">
                  <label for="inputTelephone" class="form-label">age</label>
                  <input type="number" class="form-control" name="telephone">
                </div>

                <div class="col-lg-6 mt-3">
                  <label for="inputTelephone" class="form-label">adresse</label>
                  <input type="text" class="form-control" name="adresse">
                </div>

                <div class="col-lg-6 mt-3">
                  <label for="inputTelephone" class="form-label">sexe</label>
                  <input type="text" class="form-control" name="telephone">
                </div>
                <div class="col-lg-6 mt-3">
                  <label for="inputEmail" class="form-label">telephone</label>
                  <input type="text" class="form-control" name="email">
                </div>
                  <div class="col-lg-12 mt-2">
                    <label for="inputMatiere" class="form-label">date_rdv</label>
                    <input type="text" class="form-control" name="matiere">
                </div>
                
        
                <div class="col-lg-6 mt-3">
                  <label for="inputEmail" class="form-label">heure_rdv</label>
                  <input type="text" class="form-control" name="email">
                </div>
                  <div class="col-lg-12 mt-2">
                    <label for="inputMatiere" class="form-label">statut</label>
                    <input type="text" class="form-control" name="matiere">
                </div>

               

                

              </div>

          </div>
        </div>

      </div>
    </div>
  </div>
</div>

  </section>
  

@endsection
