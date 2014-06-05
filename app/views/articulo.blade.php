@extends('plantilla')

@section('contenido')
	<h1>Articulo</h1>
	<h2>titulo: {{$tablaarticulos[0]->id}}</h2>
	<p>Contenido: {{$tablaarticulos[0]->contenido}}</p>

	<h2>Imagenes</h2>
	<ul>
	@foreach($tablafotos as $foto)

	{{ HTML::image($foto['ruta'], "imagen")  }}
	@endforeach
	</ul>
	

@stop