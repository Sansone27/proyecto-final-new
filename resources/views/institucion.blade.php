@extends('plantilla')

@section('seccion')
<h1>soy informacion institucional</h1>
@foreach ($equipo as $item)
<a href="{{route ('institucion' ,$item)}}" class="h3 text-danger">{{$item}}</a>
<br>
@endforeach
@if(!empty($nombre))
	@switch($nombre)

	@case($nombre=='presidente')
	<h2 class="mt-5">Este es el {{$nombre}}:</h2>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi suscipit obcaecati et aperiam quas, vero quo labore tempore, deleniti saepe.</p>
	@break
	@case($nombre=='jugadores')
	<h2 class="mt-5">Este es el {{$nombre}}:</h2>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi suscipit obcaecati et aperiam quas, vero quo labore tempore, deleniti saepe.</p>
	@break
	@case($nombre=='comision')
	<h2 class="mt-5">Este es el {{$nombre}}:</h2>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi suscipit obcaecati et aperiam quas, vero quo labore tempore, deleniti saepe.</p>
	@break
	@endswitch 

@endif
@endsection