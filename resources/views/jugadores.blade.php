@extends('plantilla')
@section('seccion')
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>Jugadores de Coipu Rugby Club</title>
</head>

<body>
  <div class="container my-4">
    <h1 class="display-4">Jugadores</h1>
    @if(session('mensaje'))
    <div class="alert alert-success">
      {{ session('mensaje') }}
    </div>
    @endif
    <form action="{{route('krear')}}" method="POST">
      @csrf
      @error('nombre') 
        <div class="alert alert-danger">
        El nombre es obligatorio
      </div>
      @enderror
      @error('apellido') 
        <div class="alert alert-danger">
        El apellido es obligatorio
      </div>
      @enderror
      @error('correo') 
        <div class="alert alert-danger">
        El Correo electronico es obligatorio
      </div>
      @enderror
      @error('tel') 
        <div class="alert alert-danger">
        El numero de telefono es obligatorio
      </div>
      @enderror
      <input type="text" placeholder="Nombre" name="nombre" class="form-control mb-2" value="{{old('nombre')}}">
      <input type="text" placeholder="Apellido" name="apellido" class="form-control mb-2" value="{{old('apellido')}}">
      <input type="text" placeholder="E-mail" name="correo" class="form-control mb-2" value="{{old('correo')}}">
      <input type="text" placeholder="Telefono" name="telefono" class="form-control mb-2" value="{{old('telefono')}}">
      <button class="btn btn-primary btn-block" type="submit">Agregar jugador</button>
    </form><!--cierre form-->
    <table class="table">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">Correo</th>
          <th scope="col">Telefono</th>
        </tr>
      </thead>
      <tbody>
        @foreach($jugadores as $item)
        <tr>
          <th scope="row">{{$item->id_jugador}}</th>
          <td>
            {{$item->nombre}}
          </td>
          <td>
            {{$item->apellido}}
          </td>
          <td>
            {{$item->correo}}
          </td>
          <td>
            {{$item->telefono}}
          </td>
          <td>
              <a href="" class="btn btn-warning btn-sm">Editar</a>  
              
              <form action="{{ route('jugadores.eliminar' , $item)}}" method="POST" class="d-inline">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger btn-sm" type="submit">
                Eliminar
              </button>
              </form>          
          </td>
        </tr>
        @endforeach()
      </tbody>
    </table>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

{{$jugadores->links()}}
@endsection