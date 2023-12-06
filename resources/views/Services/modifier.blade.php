@extends('layouts.mainlayout')
@section('content')

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


    <h1 class="text-center">Modifier un service</h1>


    <form action="{{ route('services.update', $services->id) }}" method="POST">
        @method('PATCH')
       @csrf
    <div class="row">
     
        <div class="col-lg-6 mt-3">
          <label for="inputNom" class="form-label">Type_service</label>
          <input type="text" class="form-control" name="type_service" value="{{ $services->type_service }}">
          
        </div>
        <div class="col-lg-6 mt-3">
          <label for="inputPrenom" class="form-label">description</label>
          <input type="text" class="form-control" name="description" value="{{ $specialites->description }}">
        </div>

        
        <div class="text-center mt-3">
          <button type="submit" class="btn btn-primary">Enregistrer</button>
          <button type="reset" class="btn btn-danger">Annuler</button>
        </div>




      </div>
    </form>
@endsection