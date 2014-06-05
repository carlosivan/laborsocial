angular.module('mainCtrl', [])
	.controller('mainController', function($scope,$upload, $http, Articulo,Categoria,Foto) {
		
		$scope.categorias={};
		$scope.articulos={};
		$scope.fotos={};

		$scope.campocategoria="";
		$scope.campo_nombre_articulo="";
		$scope.campo_contenido_articulo="";
		$scope.campo_resumen_articulo="";
		
		Articulo.get().success(function(datos) {
				$scope.articulos = datos;
		});
		Categoria.get().success(function(datos){
			$scope.categorias = datos;
		});
		Foto.get().success(function(datos){
			$scope.fotos= datos;
		});

		$scope.buscararticulo=function(dato){
			Articulo.getid(dato.id).success(function(datos){
				$scope.articulos = datos;
			});
		}

		$scope.borrarcategoria=function(dato){
			Categoria.borrar(dato.id).success(function(datos){
				$scope.categorias = datos;
			});
		}
		$scope.borrararticulo=function(dato){
			Articulo.borrar(dato.id , dato.idcategoria).success(function(datos){
					$scope.articulos= datos;
			});
		}
		$scope.borrarfoto=function(dato){
			Foto.borrar(dato.id).success(function(datos){
				$scope.fotos = datos;

			});
		}	


		$scope.agregarcategoria=function(dato){

			var envi={"nombre": dato};
			Categoria.agregar(envi).success(function(datos){
				$scope.categorias = datos;
			});
		}
		$scope.agregararticulo=function(dato){
			var envi={"nombre": $scope.campo_nombre_articulo,
					  "contenido": $scope.campo_contenido_articulo,
					  "resumen": $scope.campo_resumen_articulo,
					  "idcategoria":dato.id
					};
				Articulo.agregar(envi).success(function(datos){
					$scope.articulos = datos;
				});
			
		}
		$scope.agregarfotos=function($fotos,dato){
			for (var i = 0; i < $fotos.length; i++) {
		      var foto = $fotos[i];
		      $scope.upload = $upload.upload({
		        url: '/laborsocialv2/public/agregarimagen',
		        method: 'POST',
		        data: dato,
		        file: foto, 
		      }).progress(function(evt) {
		        console.log('percent: ' + parseInt(100.0 * evt.loaded / evt.total));
		      }).success(function(datos, status, headers, config) {
		        $scope.fotos = datos;
		      });
		      }
		}


	});
	
	