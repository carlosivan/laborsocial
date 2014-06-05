<!DOCTYPE html>
<html  ng-app="articulosapp">
	<head>

	{{HTML::script('vendor/angular.min.js')}}
	{{HTML::script('vendor/angular-file-upload.js')}}
	{{HTML::script('js/controllers/mainCtrl.js')}}
	{{HTML::script('js/services/categoriaService.js')}}
	{{HTML::script('js/services/articuloService.js')}}
	{{HTML::script('js/services/fotoService.js')}}
	{{HTML::script('js/app.js')}}

	</head>
	<body ng-controller="mainController">
		<!-- menu titulo y menu -->
		<header>
		<h1>{{ link_to('/','Labor Socil')}}</h1>	
		<nav>
			<ul ng-repeat="categoria in categorias">
				<li>{{ link_to('articulos/<%categoria.id%>','<% categoria.nombre %>')}}</li>
			</ul>
		</nav>
		</header>
		
		<hr>

		@yield('contenido')
	
	</body>
</html>