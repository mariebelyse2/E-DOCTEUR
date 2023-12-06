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
            <p>LISTE  DES  SERVICES</p>
        </div>
            <!-- Table with stripped rows -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">type_service</th>
                  <th scope="col">description</th>
                  <th scope="col">Actions</th> 
  
                </tr>
              </thead>
              <tbody>
                
                  @foreach ($services as $serv )
                  <tr>
                    <td>{{ $serv ->id }}</td>
                    <td>{{ $serv ->type_service }}</td>
                    <td>{{ $serv ->description }}</td>
                    
                    

                    
                    <td>          
                      <a href="{{ route('serv.show', $serv ->id ) }}" class="btn btn-success"><i class="bi bi-eye" title="détails"></i></a>
                      <a href="{{ route('serv.edit', $serv ->id ) }}" class="btn btn-info"><i class="bi bi-pencil-square" title="modifier"></i></a>
                      <a href="{{ url('supprimer-service/' .$serv ->id) }}" class="btn btn-danger"> <i class="bi bi-trash"></i></a>                   
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