@extends('layouts.mainlayouts')

@section('contenu')
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

  <section class="section dashboard">
    <div class="row">
      <!-- Left side columns -->
      <div class="col-lg-12">
        <div class="row">

          <!-- Formulaire inscription etudiant -->

          <div class="col-12">
            <div class="card recent-sales overflow-auto">
              <div class="card-body">
                <h5 class="card-title">Ajout d'une nouvelle demande </h5>

              <form class="row g-3" method="POST" action="{{route('demandes.update', $demandes->id)}}">
                @method('PATCH')
                @csrf
              <div class="col-md-12">
                <label for="inputName5" class="form-label">Libelle</label>
                <input type="text" class="form-control" name="libelle" value="{{ $demandes->libelle}}">
              </div>

              <div class="col-md-6">
                <label for="inputEmail5" class="form-label">Titre</label>
                <input type="text" class="form-control" name="titre" value="{{ $demandes->titre}}">
              </div>

              <div class="col-md-6">
                <label for="inputPassword5" class="form-label">Resumé</label>
                <input type="text" class="form-control" name="resume" value="{{ $demandes->resume}}">
              </div>

              <div class="row">
              <div class="col-md-6">

                <select name="statut" class="form-select" hidden>
                  <option value="En attente"> <option>


                </select>
              </div>

                <div class="col-md-12">
                  <label for="inputAddress5" class="form-label">Date</label>
                  <input type="date" class="form-control" name="date" value="{{ $demandes->date}}">
                </div>

              </div>



              <div class="row">

              <div class="col-md-6">
                <label for="inputState" class="form-label">Période</label>
                <select name="periode" class="form-select" value="{{ $demandes->periode}}">
                  <option>Choisir la période ...</option>
                  <option>Octobre</option>
                  <option>Novembre</option>
                  <option>Decembre</option>

                </select>
              </div>

              <div class="col-md-6 mt-2">

                <select class="form-control" name="etudiants_id" value="{{ $demandes->etudiants_id}}">

                    <option>Selectionner un docteur</option>;
                    @foreach ($etudiants as $etud)
                        <option value="{{ $doct->id }}">{{ $doct->nom }} {{ $doct->prenom }}</option>
                    @endforeach
                </select>

            </div>

              <div class="text-center">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="reset" class="btn btn-danger">Effacer</button>
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