@extends('welcome')
@section('Contenido')
<div class="card card-primary">
    <!-- Formulario Frutas -->
    <div class="card-header">
      <h3 class="card-title">Frutas</h3>
    </div>
    <form action="{{url('/Form')}}" method="POST">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label>Fruit Name</label>
          <input type="text" class="form-control" name="Nombre" placeholder="Fruit Name">
        </div>
        <div class="form-group">
          <label>Amount of fruits</label>
          <input type="text" class="form-control" name="Cantidad" placeholder="Amount of fruits">
        </div>
        <div class="form-group">
          <label>Supplier</label>
          <input type="text" class="form-control" name="Proveedor" placeholder="Supplier">
        </div>
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Register</button>
      </div>
    </form>
  </div>
<!-- Tabla Frutas -->
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Frutas</h3>

        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>Id</th>
                <th>Nombre Fruta</th>
                <th>Cantidad</th>
                <th>Proveedor</th>
                <th>Editar-Eliminar</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($frutas as $item)
                <tr>
                    <td>{{$loop->index + 1}}</td>
                    <td>{{$item->Nombre}}</td>
                    <td>{{$item->Cantidad}}</td>
                    <td>{{$item->Proveedor}}</td>
                    <td class="d-flex">
                        <form action="{{url('/FormEdit', $item->id)}}" method="get">
                          @csrf
                          <button><svg xmlns="http://www.w3.org/2000/svg" height="3em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/></svg></button>
                        </form>
                
  
                      <form action="{{url('/Eliminar', $item->id)}}" method="post">
                          @csrf
                          @method('delete')
                          <button><svg xmlns="http://www.w3.org/2000/svg" height="3em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg></button>
                      </form>
                    </td>
                </tr>
              @empty
                <tr>
                    <td>No records</td>
                    <td>No records</td>
                    <td>No records</td>
                    <td>No records</td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>



@endsection

