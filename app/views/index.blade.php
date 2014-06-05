@extends('plantilla')

@section('contenido')
	<h1>Index</h1>
	
	<h2>Ultimas noti</h2>
	<ul>

		@foreach($articulos as $articulo)
		<li> 
			 {{$articulo->nombre}}| {{$articulo->resumen}}

			{{ link_to('articulo/'.$articulo->id,'Ver Mas')}}
		</li>
		@endforeach
	
	</ul>
@stop

