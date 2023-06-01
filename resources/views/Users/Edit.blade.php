{{-- @extends('welcome') --}}

{{-- @section('Contenido') --}}

<div class="card card-primary">
    <!-- Formulario Frutas -->
    <div class="card-header">
      <h3 class="card-title">Frutas</h3>
    </div>

    <form action="{{url('/update', $fruta->id)}}" method="POST">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label>Fruit Name</label>
          <input type="text" class="form-control" name="Nombre" placeholder="Fruit Name"  value="{{$fruta->Nombre}}">
        </div>
        <div class="form-group">
          <label>Amount of fruits</label>
          <input type="text" class="form-control" name="Cantidad" placeholder="Amount of fruits" value="{{$fruta->Cantidad}}">
        </div>
        <div class="form-group">
          <label>Supplier</label>
          <input type="text" class="form-control" name="Proveedor" placeholder="Supplier" value="{{$fruta->Proveedor}}">
        </div>
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Actulizar</button>
      </div>
    </form>
  
</div>

{{-- @endsection
 --}}


