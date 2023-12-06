<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('asset/img/favicon.png')}}" rel="icon">
  <link href="{{asset('asset/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="{{asset('https://fonts.gstatic.com')}}" rel="preconnect">

  <link href="{{asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i')}}" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('asset/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('asset/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('asset/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('asset/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('asset/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('asset/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('asset/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('asset/css/style.css')}}" rel="stylesheet">

  <script src="{{asset('asset/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('asset/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('asset/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{asset('asset/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('asset/vendor/quill/quill.min.js')}}"></script>
  <script src="{{asset('asset/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset('asset/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('asset/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('asset/js/main.js')}}"></script>



  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Aug 30 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>
<body>


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
      <h1>Prendre un rendez-vous</h1>
      <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('welcome')}}">Accueil</a></li>
          <li class="breadcrumb-item active">Prendre un rendez-vous</li>
        </ol>
      </nav>
    </div>
    <!-- End Page Title -->

    <section class="section dashboard">

      <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">


            <div class="col-12">
                <div class="card recent-sales overflow-auto">
                  <div class="card-body">
                    <h5 class="card-title">Remplissez ce formulaire pour prendre un rendez-vous! </h5>

                  <form method="POST" action="{{route('rendezvous.store')}}" class="row g-3">
                    @csrf

                  <div class="col-md-6">
                    <label for="inputName5" class="form-label">Nom </label>
                    <input type="text" class="form-control" name="nom">
                  </div>

                  <div class="col-md-6">
                    <label for="inputEmail5" class="form-label">Prénom</label>
                    <input type="text" class="form-control" name="prenom">
                  </div>



                  <div class="col-md-6">
                    <label for="inputPassword5" class="form-label">Age</label>
                    <input type="number" class="form-control" name="age">
                  </div>

                  <div class="col-6">
                    <label for="inputAddress5" class="form-label">Adresse</label>
                    <input type="text" class="form-control" name="adresse">
                  </div>



                  <div class="col-6">
                    <label for="inputAddress5" class="form-label">Sexe</label>
                    <input type="text" class="form-control" name="sexe">
                  </div>

                  <div class="col-6">
                    <label for="inputAddress5" class="form-label">Téléphone</label>
                    <input type="number" class="form-control" name="telephone">
                  </div>




                  <div class="col-6">
                    <label for="inputAddress5" class="form-label">Date du rendez-vous</label>
                    <input type="date" class="form-control" name="date_rdv">
                  </div>


                    <div class="col-6">
                        <label for="inputAddress5" class="form-label">Heure du rendez-vous</label>
                        <input type="time" class="form-control" name="heure_rdv">
                      </div>

					  <div class="col-6">
                        <label for="inputAddress5" class="form-label">Votre adresse</label>
                        <input type="text" class="form-control" name="adresse">
                      </div>

					  <div class="col-md-6">
						<label for="" class="form-label">Choisir un docteur</label>
						<select class="form-control"   name="docteurs_id">
							<option>Selectionner un  Docteur</option>
              <option value="">Neurologie</option>
              <option value="">Cardiologie</option>
              <option value="">Dentaire</option>
              <option value="">Ophthalmologie</option>
              <option value="">autres services</option>
            </select>
							@foreach ($docteurs as $docteur)
							<option value="{{$docteur->id}}">{{$docteur->nom}} {{$docteur->prenom}} </option>
						@endforeach
						</select>
					  </div>

                      <div class="col-6">

                        <select name="statut" class="form-select" hidden>
                          <option value="En attente"> <option>
                        </select>
                      </div>

                  <div class="text-center m-2">
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                    <button type="reset" class="btn btn-danger">Annuler</button>
                  </div>
                </form>

                  </div>

                </div>
              </div>


          </div>
        </div>
        <!-- End Left side columns -->

      </div>
    </section>
</body>
</html>