@extends('plantilla')

@section('contenido')
<h1>Articulos</h1>	
<ul>
	@foreach($tablaarticulos as $tabla)
	<li>
			@foreach($tablafotos as $foto)
			@if($tabla->id==$foto['idarticulo'])
			{{ HTML::image($foto['ruta'], "imagen")  }}
			@endif
			@endforeach
		
		<p>{{$tabla->nombre}} | {{$tabla->resumen}}
		<strong> {{ link_to('articulo/'.$tabla->id,'Ver MAs')}}</strong>
		</p>
	</li>
	
	@endforeach
 {{ $tablaarticulos->links() }}
</ul>
@stop