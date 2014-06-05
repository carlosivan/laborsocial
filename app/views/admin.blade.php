@extends('plantilla')

@section('contenido')
<h1>Administracion</h1>
<div ng-controller="mainController">
	<h1>Agregar Categoria</h1>
		<input type="text" ng-model="campocategoria" >
		<button ng-click="agregarcategoria(campocategoria)">Agregar</button>
	<hr>
	<h1>Agregar Articulo</h1>
		<select  ng-model="mainCtrl"  ng-options="categoria.nombre for categoria in categorias">
		</select>
		<input type="text" ng-model="campo_nombre_articulo">
		<textarea name="" id="" cols="30" rows="10" ng-model="campo_contenido_articulo"></textarea>
		<textarea name="" id="" cols="30" rows="10" ng-model="campo_resumen_articulo"></textarea>
		<button ng-click="agregararticulo(mainCtrl)">Agregar</button>
	<hr>
	<h1>Agregar Foto</h1>
		<select  ng-model="mainCtrl"  ng-options="categoria.nombre for categoria in categorias" ng-change="buscararticulo(mainCtrl)">
		</select>
		<select  ng-model="mainCtrl"  ng-options="articulo.nombre for articulo in articulos" >
		</select>
		<input type="file" ng-file-select="agregarfotos($files,mainCtrl)" multiple>
		<div ng-file-drop="agregarfotos($files,mainCtrl)" ng-file-drag-over-class="optional-css-class"ng-show="dropSupported">Arrartrar aqui</div>

	<h1>Editar categoria</h1>
		<div ng-hide="loading" ng-repeat="categoria in categorias">
		<p> <% categoria.id %> <small>|  <% categoria.nombre %></p>
		<p>
			<button type="button" class="btn btn-default" ng-click="borrarcategoria(categoria)">Borrar</button>
			<button type="button" class="btn btn-default">Editar</button>
		</p>
	</div>

	<h1>Editar Articulo</h1>
	<!-- <select class="form-control" ng-model="mainCtrl"  ng-options="categoria.nombre for categoria in categorias" ng-change="buscararticulo(mainCtrl)">
	</select> -->
	<hr>
	
	
	<div  ng-repeat="articulo in articulos">
		<h3><% articulo.id %> <small>| <% articulo.nombre %></h3>
		<p><% articulo.resumen %></p>
		<p>
			<button type="button" class="btn btn-default" ng-click="borrararticulo(articulo)">Borrar</button>
			<button type="button" class="btn btn-default">Editar</button>
		</p>
	</div>
	<h1> Editar Fotos</h1>
	<div ng-repeat="foto in  fotos">
		
			<h3><% foto.id %> <small>| <% foto.idarticulo %></h3>
			<p><% foto.ruta %>
				<img src="<% foto.ruta %>" alt="">
			</p>
			<p>
				<button type="button" class="btn btn-default" ng-click="borrarfoto(foto)">Borrar</button>
				<button type="button" class="btn btn-default">Editar</button>
			</p>
	</div>

</div>

@stop